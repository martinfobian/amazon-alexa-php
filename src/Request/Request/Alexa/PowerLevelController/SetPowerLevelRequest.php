<?php


namespace MaxBeckers\AmazonAlexa\Request\Request\Alexa\PowerLevelController;

use MaxBeckers\AmazonAlexa\Request\Request\AbstractRequest;
use MaxBeckers\AmazonAlexa\Request\Request\Alexa\AlexaRequest;

class SetPowerLevelRequest extends AlexaRequest
{
    const TYPE = 'Alexa.PowerLevelController.SetPowerLevel';

    public $endpointId;

    public $powerLevel;

    public static function fromAmazonRequest(array $amazonRequest): AbstractRequest
    {
        $request = new self();

        $request->endpointId = $amazonRequest['endpoint']['endpointId'];
        $request->powerLevel = $amazonRequest['payload']['powerLevel'];

        return $request;
    }
}
