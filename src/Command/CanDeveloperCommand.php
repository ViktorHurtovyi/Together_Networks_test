<?php

namespace App\Command;

use App\Worker\Developer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CanDeveloperCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('can', InputArgument::REQUIRED)
            ->setName('can:developer');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $developer = new Developer();
        $output->writeln($developer->can($input->getArgument('can')));
    }
}