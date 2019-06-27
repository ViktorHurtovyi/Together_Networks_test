<?php

namespace App\Command;

use App\Worker\Designer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CanDesignerCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('can', InputArgument::REQUIRED)
            ->setName('can:designer');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $designer = new Designer();
        $res = $input->getArgument('can');
        $output->writeln($designer->$res()?'true':'false');
    }
}