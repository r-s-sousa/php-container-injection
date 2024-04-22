<?php

require_once __DIR__ . '/../vendor/autoload.php';

function usingSymfonyContainer()
{
    echo __METHOD__ . ': ';
    require_once __DIR__ . '/symfony.php';
    echo '<br>';
}

function usingPHPDIContainer()
{
    echo __METHOD__ . ': ';
    require_once __DIR__ . '/php-di.php';
    echo '<br>';
}

usingSymfonyContainer();
usingPHPDIContainer();
