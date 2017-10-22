<?php

require_once 'EmailAddressLoader.php';
require_once 'HappyMessageSender.php';
require_once 'Logger.php';

$emailLoader = new EmailAddressLoader();
$logger = new Logger(__DIR__.'/debug.log');
$happyMessageSender = new HappyMessageSender($emailLoader, $logger);

$happyMessageSender->sendHappiness();
