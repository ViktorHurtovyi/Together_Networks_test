<?php

namespace App\Command;

use App\Worker\Manager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CanManagetCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('can', InputArgument::REQUIRED)
            ->setName('can:manager');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $manager = new Manager();
        $res = $input->getArgument('can');
        $output->writeln($manager->$res()?'true':'false');
    }
}