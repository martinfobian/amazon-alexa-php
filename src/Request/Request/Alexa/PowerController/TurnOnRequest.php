<?php

namespace MaxBeckers\AmazonAlexa\Request\Request\Alexa\PowerController;

use MaxBeckers\AmazonAlexa\Request\Request\AbstractRequest;
use MaxBeckers\AmazonAlexa\Request\Request\Alexa\AlexaRequest;

class TurnOnRequest extends AlexaRequest
{
    const TYPE = 'Alexa.PowerController.TurnOn';

    public $endpointId;

    public static function fromAmazonRequest(array $amazonRequest): AbstractRequest
    {
        $request = new self();

        $request->endpointId = $amazonRequest['endpoint']['endpointId'];

        return $request;
    }
}
