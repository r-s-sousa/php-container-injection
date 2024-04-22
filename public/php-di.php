<?php

use app\container\CustomerComunication;
use app\container\Mailer;
use app\container\MailerInterface;

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    MailerInterface::class => DI\get(Mailer::class)
]);

$container = $builder->build();

$customerComunication = $container->get(CustomerComunication::class);
$customerComunication->SendDefaultMessage();
