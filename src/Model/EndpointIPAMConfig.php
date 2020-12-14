<?php

declare(strict_types=1);

namespace Docker\API\Model;

class EndpointIPAMConfig
{
    /**
     * @var string|null
     */
    protected $iPv4Address;
    /**
     * @var string|null
     */
    protected $iPv6Address;
    /**
     * @var string[]|null
     */
    protected $linkLocalIPs;

    public function getIPv4Address(): ?string
    {
        return $this->iPv4Address;
    }

    public function setIPv4Address(?string $iPv4Address): self
    {
        $this->iPv4Address = $iPv4Address;

        return $this;
    }

    public function getIPv6Address(): ?string
    {
        return $this->iPv6Address;
    }

    public function setIPv6Address(?string $iPv6Address): self
    {
        $this->iPv6Address = $iPv6Address;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getLinkLocalIPs(): ?array
    {
        return $this->linkLocalIPs;
    }

    /**
     * @param string[]|null $linkLocalIPs
     */
    public function setLinkLocalIPs(?array $linkLocalIPs): self
    {
        $this->linkLocalIPs = $linkLocalIPs;

        return $this;
    }
}
