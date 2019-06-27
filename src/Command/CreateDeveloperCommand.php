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
            ->setName('users:developer')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $developer = new Developer();

        if($developer->writeCode()) $output->writeln('- code write');
        if($developer->testCode()) $output->writeln('- code testing');
        if($developer->communication()) $output->writeln('- communication with manager');
        if($developer->draw()) $output->writeln('- draw');
        if($developer->setTask()) $output->writeln('- set tasks');
    }
}