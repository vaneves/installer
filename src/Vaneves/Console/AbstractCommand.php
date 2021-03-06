<?php 

namespace Vaneves\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->create($input, $output);
    }
}