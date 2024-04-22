<?php

namespace app\example;

class Mailer implements MailerInterface
{
    public function send(string $message): void
    {
        echo "sending message: {$message}";
    }
}
