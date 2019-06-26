<?php

namespace App\Command;

use App\Worker\Tester;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CanTesterCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('can', InputArgument::REQUIRED)
            ->setName('can:tester');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $tester = new Tester();
        $output->writeln($tester->can($input->getArgument('can')));
    }
}