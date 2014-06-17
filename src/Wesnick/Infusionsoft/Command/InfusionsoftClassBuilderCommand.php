<?php


namespace Wesnick\Infusionsoft\Command;


use KzykHys\ClassGenerator\Builder\ClassBuilder;
use KzykHys\ClassGenerator\Builder\MethodBuilder;
use KzykHys\ClassGenerator\Builder\PropertyBuilder;
use KzykHys\ClassGenerator\Compiler\Compiler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InfusionsoftClassBuilderCommand extends Command
{



    protected function configure()
    {
        $this
            ->setName('wesnick:infusionsoft:classbuilder')
            ->setDescription('Build Proxy Classes for Infusionsoft Web Service')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $simple = simplexml_load_file(__DIR__ . '/../../../../doc/api_field_access.xml');

        $api = array();

        /** @var $table \SimpleXMLElement */
        foreach ($simple->table as $table) {
            $attr = $table->attributes();
            $name = (string) $attr['name'];
            foreach ($table as $key => $node) {

                switch ($key) {
                    case 'fields':
                        $value = $this->processFieldDefinitions($node);
                        break;
                    case 'restriction':
                        $value = array();
                        foreach ($node as $rkey => $rvalue) {
                            $value[$rkey] = (string) $rvalue;
                        }
                        break;
                    case 'description':
                    case 'table-name':
                    case 'sql-join':
                    case 'custom-field-table-name':
                    default:
                        $value = (string) $node;
                        break;
                }

                $api[$name][$key] = $value;
            }
        }


        foreach ($api as $class => $rows) {
            $this->buildClass($class, $rows);
        }
    }



    private function processFieldDefinitions($nodeValue)
    {
        $fields = array();
        foreach ($nodeValue->field as $field) {
            $attr = $field->attributes();
            $type = (string) $attr['type'];
            $phpType = 'string';
            $options = array();
            switch ($type) {
                case 'String':
                case 'Blog':
                    $phpType = 'string';
                    break;
                case 'Enum':
                    if (isset($field->options)) {
                        foreach ($field->options->option as $option) {
                            $options[(string) $option] = (string) $option;
                        }
                    }
                    $phpType = 'string';
                    break;
                case 'Date':
                case 'DateTime':
                    $phpType = '\DateTime';
                    break;
                case 'Double':
                    $phpType = 'float';
                    break;
                case 'Long':
                case 'Int':
                    $phpType = 'int';
                    break;
                case 'Boolean':
                    $phpType = 'bool';
                    break;
                case 'Id':
                    // If there is an explicit relationship, then we link the Type
                    if (isset($field->relationship)) {
                        $relationship = $field->relationship->attributes();

                        $relatedOrdinality = (string) $relationship['type'];
                        $relatedType = (string) $relationship['table'];
                        $phpType = ($relatedOrdinality === 'MANY_TO_MANY') ? 'array<' . $relatedType. '>' : $relatedType;
                    } else {
                        $phpType = 'int';
                    }
            }

            $fields[(string) $attr['name']] = array(
                'XMLType'   => (string) $attr['type'],
                'var'       => $phpType,
                'options'   => $options,
            );
        }
        return $fields;
    }


    private function buildClass($class, $rows)
    {

        $fileDir = __DIR__ . '/../Proxy';
        if (!file_exists($fileDir)) {
            mkdir($fileDir);
        }

        $namespace = "Wesnick\Infusionsoft\Proxy\\";
        $className = $namespace . $class;
        $file = $fileDir . '/' . $class . '.php';


        $classBuilder = new ClassBuilder();
        $classBuilder->setClass($className);
        $classBuilder->addImports("Wesnick\\Infusionsoft\\Remote\\BaseObject");
        $classBuilder->setExtends("BaseObject");

        $docblock[] = "class $class";
        $keys = array(
            'description',
            'table-name',
            'sql-join'
        );

        foreach ($keys as $key) {
            if (isset($rows[$key])) {
                $docblock[] = $rows[$key];
            }
        }

        $classBuilder->setDocblock($docblock);

        $propertyMap = array();

        foreach ($rows['fields'] as $fieldName => $field) {

            // Don't include dot delimited properties
            if (strpos($fieldName, ".") !== false) {
                continue;
            }

            $propertyBuilder = $this->processProperty($fieldName, $field);
            $propertyMap[] = "'" . $propertyBuilder->getName() . "' => '" . $propertyBuilder->getType() . "'";
            $classBuilder->addProperty($propertyBuilder);
        }

        $compiler = new Compiler(array(
            'indent_spaces' => '4',
            'lineFeed' => "\n"
        ));

        // Add our class property map
        $pb = new PropertyBuilder();
        $pb->setName('propertyMap');
        $pb->setType('array');
        $pb->setVisibility('protected static');
        $pb->setDefault('array(' . implode(", ", $propertyMap) . ')');
        $classBuilder->addProperty($pb);

        $streamWriter = $compiler->compile($classBuilder);
        $streamWriter->save($file);

    }

    private function processProperty($fieldName, $field)
    {

        $comments[] = $field['XMLType'];
        if ($field['options']) {
            $comments[] = 'Options: ' . implode(", ", $field['options']);
        }

        $propertyBuilder = new PropertyBuilder();
        $propertyBuilder->setName($fieldName);
        $propertyBuilder->setComments($comments);
        $propertyBuilder->setType($field['var']);
        $propertyBuilder->setVisibility('public');

        return $propertyBuilder;
    }


} 
