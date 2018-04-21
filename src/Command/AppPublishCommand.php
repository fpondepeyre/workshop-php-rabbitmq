<?php

namespace App\Command;

use OldSound\RabbitMqBundle\RabbitMq\ProducerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class AppPublishCommand
 */
class AppPublishCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'app:publish';

    /**
     * @var Producer
     */
    private $producer;

    /**
     * AppPublishCommand constructor.
     *
     * @param Producer $producer
     */
    public function __construct(ProducerInterface $producer)
    {
        $this->producer = $producer;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setDescription('Publish message in Rabbitmq')
            ->addOption('message', 'm', InputOption::VALUE_OPTIONAL, 'Messages to publish', 100000)
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $message = (int)$input->getOption('message');

        for ($i = 1; $i <= $message; $i++) {
            $this->producer->publish(json_encode([
                'title' => uniqid(),
            ]));
        }

        $io->success('Done !');
    }
}
