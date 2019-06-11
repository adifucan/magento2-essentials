<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Essentials\HelloCliCommand\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

/**
 * CLI command that prints 'Hello World' to the console.
 */
class HelloWorldCommand extends Command
{
    private const NAME = 'name';

    /**
     * @inheritdoc
     */
    protected function configure(): void
    {
        $options = [
            new InputOption(self::NAME, null, InputOption::VALUE_REQUIRED, 'Name')
        ];

        $this->setName('hello:world')
            ->setDescription('CLI command that prints \'Hello World\' or \'Hello + NAME\'')
            ->setDefinition($options);

        parent::configure();
    }

    /**
     * Print 'Hello World' from CLI command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($name = $input->getOption(self::NAME)) {
            $output->writeln('Hello ' . $name);
        } else {
            $output->writeln('Hello World');
        }
    }
}
