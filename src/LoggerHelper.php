<?php

namespace Dmitrijkalugin\LoggerHelper;

class LoggerHelper
{
    private const GREEN = "\033[32m";
    private const RED = "\033[31m";
    private const RESET = "\033[0m";

    /**
     * @param string $message
     * @return void
     */
    public static function error(string $message): void
    {
        echo self::RED . 'Error: ' . date('Y-m-d H:i:s') . ' - ' . $message . self::RESET . PHP_EOL;
    }

    /**
     * @param string $message
     * @return void
     */
    public static function debug(string $message): void
    {
        echo self::GREEN . 'DEBUG: ' . date('Y-m-d H:i:s') . ' - ' . $message . self::RESET . PHP_EOL;
    }
}
