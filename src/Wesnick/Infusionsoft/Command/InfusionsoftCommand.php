<?php


namespace Wesnick\Infusionsoft\Command;


use fXmlRpc\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Wesnick\Infusionsoft\Infusionsoft;
use Wesnick\Infusionsoft\Proxy\Contact;

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

        $contact = new Contact();



//        $infusionsoft->getContactService()->add()
    }


} 
