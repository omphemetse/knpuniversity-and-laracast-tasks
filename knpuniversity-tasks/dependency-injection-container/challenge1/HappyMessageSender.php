<?php

class HappyMessageSender
{
    private $emailLoader;

    public function __construct(EmailLoaderInterface $emailLoader)
    {
        $this->emailLoader = $emailLoader;
    }

    public function sendHappiness()
    {
        $emails = $this->emailLoader->getAllEmails();
        foreach ($emails as $email) {
            // just print for testing
            echo 'I hope you\'re having a GREAT day '.$email.'<hr/>';
        }
    }
}
