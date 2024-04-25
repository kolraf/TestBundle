<?php

namespace Kolraf\TestBundle\SmsSender;

class SmsSenderService
{
    public function send(string $text): bool
    {
        return $text !== '';
    }
}
