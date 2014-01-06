<?php


namespace Wesnick\Infusionsoft\Command;


use Faker\Factory;
use Faker\Generator;
use fXmlRpc\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Wesnick\Infusionsoft\Infusionsoft;
use Wesnick\Infusionsoft\Proxy\Contact;
use Wesnick\Infusionsoft\Util\FakerFactory;

class InfusionsoftCommand extends Command
{



    protected function configure()
    {
        $this
            ->setName('wesnick:infusionsoft:command')
            ->setDescription('Generic Command')
            ->addArgument('app-name', InputArgument::REQUIRED)
            ->addArgument('api-key', InputArgument::REQUIRED)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $infusionsoft = new Infusionsoft($input->getArgument('app-name'), $input->getArgument('api-key'), new Client());

//        $faker = new Factory();
//        $factory = new FakerFactory($faker->create(), 1);
//
//        $contact = $factory->createContact();
//
//
//        $infusionsoft->getContactService()->add($contact);

        $c = new Contact();

        $res = $infusionsoft->getContactService()->load(368, $c->getInfusionsoftFields());
    }


} 
