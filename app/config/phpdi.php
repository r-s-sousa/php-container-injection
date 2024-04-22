<?php

namespace app\config;

use DI\ContainerBuilder;
use app\example\Mailer;
use app\example\MailerInterface;

$builder = new ContainerBuilder();
$builder->addDefinitions([
    MailerInterface::class => new Mailer(),
]);

return $builder->build();
