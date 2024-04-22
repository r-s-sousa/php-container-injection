<?php

namespace app\example;

interface MailerInterface
{
    public function send(string $message): void;
}
