<?php

namespace app\container;

class CustomerComunication
{
    public function __construct(private MailerInterface $mailer)
    {
    }

    public function SendDefaultMessage(): void
    {
        $this->mailer->send('Default message to customer');
    }
}
