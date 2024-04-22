<?php

namespace app\container;

interface MailerInterface
{
    public function send(string $message);
}
