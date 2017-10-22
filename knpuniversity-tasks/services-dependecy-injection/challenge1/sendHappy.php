<?php

require_once 'EmailAddressLoader.php';
require_once 'HappyMessageSender.php';

$emailLoader = new EmailAddressLoader();

$happyMessageSender = new HappyMessageSender($emailLoader);

$happyMessageSender->sendHappiness();
