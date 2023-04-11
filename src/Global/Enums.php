<?php

namespace DhlApi\DhlApi\Global;

enum RequestType: string
{
    case GET = "get";
    case POST = "post";
    case DELETE = "delete";
    case PATCH = "patch";
    case PUT = "put";
}


enum TrcakingView: string
{
    case ALLCKECKHPOINTS = "all-checkpoints";
    case LASTCHECKPOINT = "last-checkpoint";
    case SHIPMENTDETAILSONLY = "shipment-details-only";
    case ADVANCESHIPMENT = "advance-shipment";
    case BBXCHILDREN = "bbx-children";
}


enum LevelOfDetai: string
{
    case SHIPMENT = "shipment";
    case PIECE = "piece";
    case ALL = "all";
}
