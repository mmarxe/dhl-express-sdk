<?php

namespace DhlApi\DhlApi\Shipment;


abstract class ShippingInterface
{
    abstract public function create();
    abstract public function get();
    abstract public function getimage();
}
