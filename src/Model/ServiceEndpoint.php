<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceEndpoint
{
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec|null
     */
    protected $spec;
    /**
     * @var EndpointPortConfig[]|null
     */
    protected $ports;
    /**
     * @var ServiceEndpointVirtualIPsItem[]|null
     */
    protected $virtualIPs;

    /**
     * Properties that can be configured to access and load balance a service.
     */
    public function getSpec(): ?EndpointSpec
    {
        return $this->spec;
    }

    /**
     * Properties that can be configured to access and load balance a service.
     */
    public function setSpec(?EndpointSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * @return EndpointPortConfig[]|null
     */
    public function getPorts(): ?array
    {
        return $this->ports;
    }

    /**
     * @param EndpointPortConfig[]|null $ports
     */
    public function setPorts(?array $ports): self
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * @return ServiceEndpointVirtualIPsItem[]|null
     */
    public function getVirtualIPs(): ?array
    {
        return $this->virtualIPs;
    }

    /**
     * @param ServiceEndpointVirtualIPsItem[]|null $virtualIPs
     */
    public function setVirtualIPs(?array $virtualIPs): self
    {
        $this->virtualIPs = $virtualIPs;

        return $this;
    }
}
