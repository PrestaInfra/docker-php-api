<?php

declare(strict_types=1);

namespace Docker\API\Model;

class NetworksCreatePostBody
{
    /**
     * The network's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Check for networks with duplicate names. Since Network is
     * primarily keyed based on a random ID and not on the name, and
     * network name is strictly a user-friendly alias to the network
     * which is uniquely identified using ID, there is no guaranteed
     * way to check for duplicates. CheckDuplicate is there to provide
     * a best effort checking of any networks which has the same name
     * but it is not guaranteed to catch all name collisions.
     *
     * @var bool|null
     */
    protected $checkDuplicate;
    /**
     * Name of the network driver plugin to use.
     *
     * @var string|null
     */
    protected $driver = 'bridge';
    /**
     * Restrict external access to the network.
     *
     * @var bool|null
     */
    protected $internal;
    /**
     * Globally scoped network is manually attachable by regular
     * containers from workers in swarm mode.
     *
     * @var bool|null
     */
    protected $attachable;
    /**
     * Ingress network is the network which provides the routing-mesh
     * in swarm mode.
     *
     * @var bool|null
     */
    protected $ingress;
    /**
     * @var IPAM|null
     */
    protected $iPAM;
    /**
     * Enable IPv6 on the network.
     *
     * @var bool|null
     */
    protected $enableIPv6;
    /**
     * Network specific options to be used by the drivers.
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;

    /**
     * The network's name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The network's name.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Check for networks with duplicate names. Since Network is
     * primarily keyed based on a random ID and not on the name, and
     * network name is strictly a user-friendly alias to the network
     * which is uniquely identified using ID, there is no guaranteed
     * way to check for duplicates. CheckDuplicate is there to provide
     * a best effort checking of any networks which has the same name
     * but it is not guaranteed to catch all name collisions.
     */
    public function getCheckDuplicate(): ?bool
    {
        return $this->checkDuplicate;
    }

    /**
     * Check for networks with duplicate names. Since Network is
     * primarily keyed based on a random ID and not on the name, and
     * network name is strictly a user-friendly alias to the network
     * which is uniquely identified using ID, there is no guaranteed
     * way to check for duplicates. CheckDuplicate is there to provide
     * a best effort checking of any networks which has the same name
     * but it is not guaranteed to catch all name collisions.
     */
    public function setCheckDuplicate(?bool $checkDuplicate): self
    {
        $this->checkDuplicate = $checkDuplicate;

        return $this;
    }

    /**
     * Name of the network driver plugin to use.
     */
    public function getDriver(): ?string
    {
        return $this->driver;
    }

    /**
     * Name of the network driver plugin to use.
     */
    public function setDriver(?string $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Restrict external access to the network.
     */
    public function getInternal(): ?bool
    {
        return $this->internal;
    }

    /**
     * Restrict external access to the network.
     */
    public function setInternal(?bool $internal): self
    {
        $this->internal = $internal;

        return $this;
    }

    /**
     * Globally scoped network is manually attachable by regular
     * containers from workers in swarm mode.
     */
    public function getAttachable(): ?bool
    {
        return $this->attachable;
    }

    /**
     * Globally scoped network is manually attachable by regular
     * containers from workers in swarm mode.
     */
    public function setAttachable(?bool $attachable): self
    {
        $this->attachable = $attachable;

        return $this;
    }

    /**
     * Ingress network is the network which provides the routing-mesh
     * in swarm mode.
     */
    public function getIngress(): ?bool
    {
        return $this->ingress;
    }

    /**
     * Ingress network is the network which provides the routing-mesh
     * in swarm mode.
     */
    public function setIngress(?bool $ingress): self
    {
        $this->ingress = $ingress;

        return $this;
    }

    public function getIPAM(): ?IPAM
    {
        return $this->iPAM;
    }

    public function setIPAM(?IPAM $iPAM): self
    {
        $this->iPAM = $iPAM;

        return $this;
    }

    /**
     * Enable IPv6 on the network.
     */
    public function getEnableIPv6(): ?bool
    {
        return $this->enableIPv6;
    }

    /**
     * Enable IPv6 on the network.
     */
    public function setEnableIPv6(?bool $enableIPv6): self
    {
        $this->enableIPv6 = $enableIPv6;

        return $this;
    }

    /**
     * Network specific options to be used by the drivers.
     *
     * @return string[]|null
     */
    public function getOptions(): ?iterable
    {
        return $this->options;
    }

    /**
     * Network specific options to be used by the drivers.
     *
     * @param string[]|null $options
     */
    public function setOptions(?iterable $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[]|null $labels
     */
    public function setLabels(?iterable $labels): self
    {
        $this->labels = $labels;

        return $this;
    }
}
