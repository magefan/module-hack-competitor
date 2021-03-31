<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * See LICENSE.txt for license details (http://opensource.org/licenses/osl-3.0.php).
 */

declare(strict_types=1);

namespace Magefan\HackCompetitor\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Hackcompatitor extends Command
{

    const WEBSITE_ARGUMENT = "website";

    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $website = $input->getArgument(self::WEBSITE_ARGUMENT);

        $output->writeln('<info>Start hacking ' . $website . '</info>');
        for ($i = 0; $i <= 100; $i++) {
            $output->writeln('<comment>Hacking ......... ' . $i . ' of 100</comment>');

            if ($i < 99) {
                if (rand(1,10) == 5) {
                    $output->writeln('<info>Keep calm and wait ..</info>');
                    
                }

                sleep(rand(1,3));
            }
        }

        $output->writeln('<info></info>');
        $output->writeln('<info>Successfully completed.</info>');
        $output->writeln('<info>HAPPY APRIL FOOLS DAY :-)</info>');
        $output->writeln('<info>P.S.: You have strong nerves thanks to DI compile and static content deployment.</info>');
        $output->writeln('<info></info>');
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("magefan:hack:competitor");
        $this->setDescription("Hack your competitor in 2 minutes.");
        $this->setDefinition([
            new InputArgument(self::WEBSITE_ARGUMENT, InputArgument::REQUIRED, "Website")
        ]);
        parent::configure();
    }
}

