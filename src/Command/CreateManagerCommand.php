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

        $manager->writeCode()? $output->writeln('- code write'):null;
        $manager->testCode()? $output->writeln('- code testing'):null;
        $manager->communication()? $output->writeln('- communication with manager'):null;
        $manager->draw()? $output->writeln('- draw'):null;
        $manager->setTask()? $output->writeln('- set tasks'):null;

    }
}