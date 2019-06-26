<?php

namespace App\Command;

use App\Worker\Designer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateDesignerCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('users:designer')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $designer = new Designer();

        $designer->writeCode()? $output->writeln('- code write'):null;
        $designer->testCode()? $output->writeln('- code testing'):null;
        $designer->communication()? $output->writeln('- communication with manager'):null;
        $designer->draw()? $output->writeln('- draw'):null;
        $designer->setTask()? $output->writeln('- set tasks'):null;
    }
}