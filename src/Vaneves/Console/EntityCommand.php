<?php 

namespace Vaneves\Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class EntityCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('entity')
            ->setDescription('Generate entity.')
            ->addArgument('name', InputArgument::REQUIRED, 'Entity name')
            ->addOption('force', 'f', InputOption::VALUE_NONE, 'Remove the file if exists');
    }

    protected function create(InputInterface $input, OutputInterface $output) 
    {
        $name = $input->getArgument('name');
        if ($input->getOption('force')) {
            
        }
        $output->writeln('Entity ' . $name . ' created successful!');
    }
}