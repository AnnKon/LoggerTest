<?php

namespace Logger;

use DateTime;
use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;


class Logger extends AbstractLogger implements LoggerInterface
{

    public $filePath;

    public $template = "{date} {level} {message} {context}";

    public $dateFormat = DateTime::RFC2822;

    protected function getDate()
    {
        return (new DateTime())->format($this->dateFormat);
    }

    protected function contextStringify(array $context = [])
    {
        return !empty($context) ? json_encode($context) : null;
    }

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log($level, $message, array $context = [])
    {
        file_put_contents($this->filePath, trim(strtr($this->template, [
                '{date}'    => $this->getDate(),
                '{level}'   => $level,
                '{message}' => $message,
                '{context}' => $this->contextStringify($context),
            ])) . PHP_EOL, FILE_APPEND);
    }
}
