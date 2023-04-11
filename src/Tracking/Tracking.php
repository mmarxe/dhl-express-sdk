<?php

namespace DhlApi\DhlApi\Tracking;

use DhlApi\DhlApi\Global\Header;
use DhlApi\DhlApi\Guzzle\GuzzleRequest;

class Tracking implements TrackingInterface
{
    public string $trackingView;
    public string $shipmentTrackingNumber;
    public string $levelOfDetail;

    public function __construct(
        string $shipmentTrackingNumber,
        string $trackingView,
        string $levelOfDetail,

    ) {
        $this->trackingView = $trackingView;
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
        $this->levelOfDetail = $levelOfDetail;
    }

    public function track()
    {
    }
}
