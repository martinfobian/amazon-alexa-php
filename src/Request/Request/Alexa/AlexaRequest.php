<?php

namespace MaxBeckers\AmazonAlexa\Request\Request\Alexa;

use MaxBeckers\AmazonAlexa\Request\Request\AbstractRequest;

abstract class AlexaRequest extends AbstractRequest
{
    public function validateSignature(): bool
    {
        return false;
    }

    public function validateTimestamp(): bool
    {
        return false;
    }
}