<?php 

namespace Vaneves\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ScaffoldCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('new')
            ->setDescription('Create a new Silex application.')
            ->addArgument('name', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $this->createProject($name);
        $output->writeln('Project ' . $name . ' created successful!');
    }

    protected function createProject($name) {
        $path = getcwd() . '/' . $name;
        $this->verifyProjectExists($path);
        mkdir($path);

    }

    protected function verifyProjectExists($name) {
        if (is_dir($name)) {
            throw new \RuntimeException('Project already exists!');
        }
    }
}