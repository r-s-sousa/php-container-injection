<?php

use app\container\Mailer;
use app\container\MailerInterface;
use app\container\CustomerComunication;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container->register(MailerInterface::class, Mailer::class);
$container->register(CustomerComunication::class, CustomerComunication::class)
     ->addArgument(new Reference(MailerInterface::class));

/** @var CustomerComunication $instance */
$instance = $container->get(CustomerComunication::class);
$instance->SendDefaultMessage();
