<?php

class HappyMessageSender
{
    private $emailLoader;

    private $logger;

    public function __construct(EmailAddressLoader $emailLoader, Logger $logger)
    {
        $this->emailLoader = $emailLoader;
        $this->logger = $logger;
    }

    public function sendHappiness()
    {
        $emails = $this->emailLoader->getAllEmails();
        foreach ($emails as $email) {
            // just print for testing
            echo 'I hope you\'re having a GREAT day '.$email.'<hr/>';
            $this->logger->logMessage($email);
        }
    }
}
