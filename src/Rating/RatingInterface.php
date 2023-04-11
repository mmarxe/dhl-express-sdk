<?php

namespace DhlApi\DhlApi\Rating;

abstract class RatingInterface
{
    abstract public function rateSingle();
    abstract public function rateMultiple();
    abstract public function landedCost();
}
