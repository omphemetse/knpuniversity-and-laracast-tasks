<?php

require_once 'EmailLoaderInterface.php';
require_once 'EmailAddressLoader.php';
require_once 'HappyMessageSender.php';

require __DIR__.'/vendor/autoload.php';

use Pimple\Container;

$container = new Container();

$container['email_loader'] = function() {
    return new EmailAddressLoader();
};
$container['happy_sender'] = function(Container $container) {
    return new HappyMessageSender($container['email_loader']);
};

/** @var HappyMessageSender $happyMessageSender */
$happyMessageSender = $container['happy_sender'];

$happyMessageSender->sendHappiness();
