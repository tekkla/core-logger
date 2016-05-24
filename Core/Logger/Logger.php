<?php
namespace Core\Logger;

use Psr\Log\AbstractLogger;
use Core\Logger\Streams\StreamAbstract;
use Core\Logger\Streams\ErrorLogStream;

/**
 * Logger.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Logger extends AbstractLogger
{

    /**
     * Stream storage
     *
     * @var array
     */
    private $streams = [];

    /**
     *
     * {@inheritDoc}
     *
     * @see \Psr\Log\LoggerInterface::log()
     */
    public function log($level, $message, array $context = array())
    {
        if (empty($this->streams)) {
            $this->registerStream(new ErrorLogStream());
        }

        foreach ($this->streams as $stream) {
            $stream->log($level, $message, $context);
        }
    }

    /**
     * Registers as Logger Stream
     *
     * @param StreamAbstract $stream
     */
    public function registerStream(StreamAbstract $stream)
    {
        $this->streams[] = $stream;
    }
}
