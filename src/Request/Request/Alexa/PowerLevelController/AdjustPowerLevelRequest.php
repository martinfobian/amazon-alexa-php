<?php

namespace MaxBeckers\AmazonAlexa\Request\Request\Alexa\PowerLevelController;

use MaxBeckers\AmazonAlexa\Request\Request\AbstractRequest;
use MaxBeckers\AmazonAlexa\Request\Request\Alexa\AlexaRequest;

class AdjustPowerLevelRequest extends AlexaRequest
{
    const TYPE = 'Alexa.PowerLevelController.AdjustPowerLevel';

    public $endpointId;

    public $powerLevelDelta;

    public static function fromAmazonRequest(array $amazonRequest): AbstractRequest
    {
        $request = new self();

        $request->endpointId = $amazonRequest['endpoint']['endpointId'];
        $request->powerLevelDelta = $amazonRequest['payload']['powerLevelDelta'];

        return $request;
    }
}
