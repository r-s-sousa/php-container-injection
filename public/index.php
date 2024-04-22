<?php

use app\example\Comunication;

require_once __DIR__ . '/../vendor/autoload.php';

$phpDIContainer = require_once __DIR__ . '/../app/config/phpdi.php';
$symfonyContainer = require_once __DIR__ . '/../app/config/symfony.php';

// SIMFONY
$Comunication = $symfonyContainer->get(Comunication::class);
$Comunication->SendDefaultMessage();

// PHP DI
$Comunication = $phpDIContainer->get(Comunication::class);
$Comunication->SendDefaultMessage();
