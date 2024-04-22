<?php

namespace app\example;

class Comunication
{
    public function __construct(private MailerInterface $mailer)
    {
    }

    public function SendDefaultMessage(): void
    {
        $this->mailer->send('Default message to Comunication<br>');
    }
}
