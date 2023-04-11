<?php


namespace DhlApi\DhlApi\Global;

class HeaderBuilder
{
    public string $Accept;
    public string $MessageReference;
    public string $MessageReferenceDate;
    public string $AcceptLanguage;
    public string $PluginName;
    public string $PluginVersion;
    public string $ShippingSystemPlatformName;
    public string $ShippingSystemPlatformVersion;
    public string $WebstorePlatformName;
    public string $WebstorePlatformVersion;

    public function setAccept(string $arg_id): HeaderBuilder
    {
        $this->Accept = $arg_id;
        return $this;
    }
    public function setMessageReference(string $arg_id): HeaderBuilder
    {
        $this->MessageReference = $arg_id;
        return $this;
    }
    public function setMessageReferenceDate(string $arg_id): HeaderBuilder
    {
        $this->MessageReferenceDate = $arg_id;
        return $this;
    }
    public function setAcceptLanguage(string $arg_id): HeaderBuilder
    {
        $this->AcceptLanguage = $arg_id;
        return $this;
    }
    public function setPluginName(string $arg_id): HeaderBuilder
    {
        $this->PluginName = $arg_id;
        return $this;
    }
    public function setPluginVersion(string $arg_id): HeaderBuilder
    {
        $this->PluginVersion = $arg_id;
        return $this;
    }
    public function setShippingSystemPlatformName(string $arg_id): HeaderBuilder
    {
        $this->ShippingSystemPlatformName = $arg_id;
        return $this;
    }
    public function setShippingSystemPlatformVersion(string $arg_id): HeaderBuilder
    {
        $this->ShippingSystemPlatformVersion = $arg_id;
        return $this;
    }
    public function setWebstorePlatformName(string $arg_id): HeaderBuilder
    {
        $this->WebstorePlatformName = $arg_id;
        return $this;
    }
    public function setWebstorePlatformVersion(string $arg_id): HeaderBuilder
    {
        $this->WebstorePlatformVersion = $arg_id;
        return $this;
    }

    public function build()
    {
        $header = new Header($this);
        return $header;
    }
}
