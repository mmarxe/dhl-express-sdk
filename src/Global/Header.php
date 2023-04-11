<?php

namespace DhlApi\DhlApi\Global;

class Header
{
    public ?string $Accept = null;
    public ?string $MessageReference = null;
    public ?string $MessageReferenceDate = null;
    public ?string $AcceptLanguage = null;
    public ?string $PluginName = null;
    public ?string $PluginVersion = null;
    public ?string $ShippingSystemPlatformName = null;
    public ?string $ShippingSystemPlatformVersion = null;
    public ?string $WebstorePlatformName = null;
    public ?string $WebstorePlatformVersion = null;

    public function __construct(HeaderBuilder $builder)
    {
        $this->Accept = $builder->Accept;
        $this->MessageReference = $builder->MessageReference;
        $this->MessageReferenceDate = $builder->MessageReferenceDate;
        $this->AcceptLanguage = $builder->AcceptLanguage;
        $this->PluginName = $builder->PluginName;
        $this->PluginVersion = $builder->PluginVersion;
        $this->ShippingSystemPlatformName = $builder->ShippingSystemPlatformName;
        $this->ShippingSystemPlatformVersion = $builder->ShippingSystemPlatformVersion;
        $this->WebstorePlatformName = $builder->WebstorePlatformName;
        $this->WebstorePlatformVersion = $builder->WebstorePlatformVersion;
    }
}
