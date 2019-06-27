<?php

namespace App\Command;

use App\Worker\Tester;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateTesterCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('users:tester')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $tester = new Tester();

        if($tester->writeCode()) $output->writeln('- code write');
        if($tester->testCode()) $output->writeln('- code testing');
        if($tester->communication()) $output->writeln('- communication with manager');
        if($tester->draw()) $output->writeln('- draw');
        if($tester->setTask()) $output->writeln('- set tasks');
    }
}