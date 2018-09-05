<?php
/**
 * Created by PhpStorm.
 * User: Craig
 * Date: 9/5/2018
 * Time: 8:56 AM
 */

namespace Craig\CommandLine\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Hi extends Command
{
    protected function configure() {
        $this->setName('craig:hi');
        $this->setDescription('Hi Craig');

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln('Hi Craig!');
    }
}
