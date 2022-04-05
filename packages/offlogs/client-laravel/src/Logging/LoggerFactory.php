<?php

namespace Offlogs\ClientLaravel\Logging;

use OffLogs\Client\OffLogsClient;
use Psr\Log\LoggerInterface;

class LoggerFactory
{
    private OffLogsClient $client;

    public function __construct()
    {
        $this->client = app()->get(OffLogsClient::class);
        dd(2222, $this->client);
    }

    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     * @return LoggerInterface
     */
    public function __invoke(array $config)
    {
        dd(3333333);
        return new Logger($config, $this->client);
    }
}
