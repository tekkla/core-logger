<?php
namespace Core\Logger\Streams;

use Psr\Log\AbstractLogger;
use Psr\Log\LogLevel;

/**
 * StreamAbstract.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
abstract class StreamAbstract extends AbstractLogger
{

    /**
     * Log Levels
     *
     * @var array
     */
    protected $logLevels = [
        LogLevel::EMERGENCY => 0,
        LogLevel::ALERT => 1,
        LogLevel::CRITICAL => 2,
        LogLevel::ERROR => 3,
        LogLevel::WARNING => 4,
        LogLevel::NOTICE => 5,
        LogLevel::INFO => 6,
        LogLevel::DEBUG => 7
    ];
}