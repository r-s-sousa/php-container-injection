<?php

namespace app\config;

use app\example\Mailer;
use app\example\MailerInterface;
use app\example\Comunication;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container->register(MailerInterface::class, Mailer::class);
$container->register(Comunication::class, Comunication::class)
     ->addArgument(new Reference(MailerInterface::class));

return $container;
