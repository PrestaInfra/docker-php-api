<?php

declare(strict_types=1);

namespace Docker\API\Model;

class NodeDescription
{
    /**
     * @var string|null
     */
    protected $hostname;
    /**
     * Platform represents the platform (Arch/OS).
     *
     * @var Platform|null
     */
    protected $platform;
    /**
     * An object describing the resources which can be advertised by a node and
     * requested by a task.
     *
     * @var ResourceObject|null
     */
    protected $resources;
    /**
     * EngineDescription provides information about an engine.
     *
     * @var EngineDescription|null
     */
    protected $engine;
    /**
     * Information about the issuer of leaf TLS certificates and the trusted root
     * CA certificate.
     *
     * @var TLSInfo|null
     */
    protected $tLSInfo;

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(?string $hostname): self
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Platform represents the platform (Arch/OS).
     */
    public function getPlatform(): ?Platform
    {
        return $this->platform;
    }

    /**
     * Platform represents the platform (Arch/OS).
     */
    public function setPlatform(?Platform $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * An object describing the resources which can be advertised by a node and
     * requested by a task.
     */
    public function getResources(): ?ResourceObject
    {
        return $this->resources;
    }

    /**
     * An object describing the resources which can be advertised by a node and
     * requested by a task.
     */
    public function setResources(?ResourceObject $resources): self
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * EngineDescription provides information about an engine.
     */
    public function getEngine(): ?EngineDescription
    {
        return $this->engine;
    }

    /**
     * EngineDescription provides information about an engine.
     */
    public function setEngine(?EngineDescription $engine): self
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Information about the issuer of leaf TLS certificates and the trusted root
     * CA certificate.
     */
    public function getTLSInfo(): ?TLSInfo
    {
        return $this->tLSInfo;
    }

    /**
     * Information about the issuer of leaf TLS certificates and the trusted root
     * CA certificate.
     */
    public function setTLSInfo(?TLSInfo $tLSInfo): self
    {
        $this->tLSInfo = $tLSInfo;

        return $this;
    }
}
