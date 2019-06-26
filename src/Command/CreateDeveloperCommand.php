<?php

namespace App\Command;

use App\Worker\Developer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateDeveloperCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('users:developers')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $developer = new Developer();

        $developer->writeCode()? $output->writeln('- code write'):null;
        $developer->testCode()? $output->writeln('- code testing'):null;
        $developer->communication()? $output->writeln('- communication with manager'):null;
        $developer->draw()? $output->writeln('- draw'):null;
        $developer->setTask()? $output->writeln('- set tasks'):null;

    }
}