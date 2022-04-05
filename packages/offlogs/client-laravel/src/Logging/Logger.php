<?php

namespace Offlogs\ClientLaravel\Logging;

use OffLogs\Client\OffLogsClient;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    private array $config;
    private OffLogsClient $client;

    public function __construct(array $config, OffLogsClient $client)
    {
        $this->config = $config;
        $this->client = $client;
        dd($this->client);
    }

    /**
     * System is unusable.
     *
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     */
    public function emergency(string $message, array $context = []): void
    {
        dd(2222, $message);
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     */
    public function alert(string $message, array $context = []): void
    {
        dd(2222, $message);
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     */
    public function critical(string $message, array $context = []): void
    {
        dd(2222, $message);
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     */
    public function error(string $message, array $context = []): void
    {
        dd(2222, $message);
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     */
    public function warning(string $message, array $context = []): void
    {
        dd(2222, $message);
    }

    /**
     * Normal but significant events.
     *
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     */
    public function notice(string $message, array $context = []): void
    {
        dd(2222, $message);
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     */
    public function info(string $message, array $context = []): void
    {
        dd(2222, $message);
    }

    /**
     * Detailed debug information.
     *
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     */
    public function debug(string $message, array $context = []): void
    {
        dd(2222, $message);
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed   $level
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     *
     * @throws \Psr\Log\InvalidArgumentException
     */
    public function log($level, string $message, array $context = []): void
    {
        dd(2222, $message);
    }
}
