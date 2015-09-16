<?php
trait Logger
{
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log($data)
    {
        return $this->logger->log($data);
    }
}