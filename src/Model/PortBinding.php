<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PortBinding
{
    /**
     * Host IP address that the container's port is mapped to.
     *
     * @var string|null
     */
    protected $hostIp;
    /**
     * Host port number that the container's port is mapped to.
     *
     * @var string|null
     */
    protected $hostPort;

    /**
     * Host IP address that the container's port is mapped to.
     */
    public function getHostIp(): ?string
    {
        return $this->hostIp;
    }

    /**
     * Host IP address that the container's port is mapped to.
     */
    public function setHostIp(?string $hostIp): self
    {
        $this->hostIp = $hostIp;

        return $this;
    }

    /**
     * Host port number that the container's port is mapped to.
     */
    public function getHostPort(): ?string
    {
        return $this->hostPort;
    }

    /**
     * Host port number that the container's port is mapped to.
     */
    public function setHostPort(?string $hostPort): self
    {
        $this->hostPort = $hostPort;

        return $this;
    }
}