<?php

namespace App\Command;

use App\Worker\Manager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateManagerCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('users:manager')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $manager = new Manager();

        if($manager->writeCode()==true) $output->writeln('- code write');
        if($manager->testCode()) $output->writeln('- code testing');
        if($manager->communication()) $output->writeln('- communication with manager');
        if($manager->draw()) $output->writeln('- draw');
        if($manager->setTask()) $output->writeln('- set tasks');

    }
}