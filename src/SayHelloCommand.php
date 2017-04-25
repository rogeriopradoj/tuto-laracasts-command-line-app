<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 24/04/17
 * Time: 07:59
 */

namespace Acme;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    public function configure()
    {
        $this->setName('sayHelloTo')
            ->setDescription('Offer a greeting to the given person.')
            ->addArgument('name', InputArgument::REQUIRED, 'Your                                                                                                                               name.')
            ->addOption('greeting', null, InputArgument::OPTIONAL, 'Override the default greeting', 'Hello');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $message = 'Hello, ' . $input->getArgument('name');
        $output->writeln("<info>{$message}</info>");
        $output->writeln("<comment>{$message}</comment>");
        $output->writeln("<question>{$message}</question>");
        $output->writeln("<error>{$message}</error>");
    }
}