<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServicesCreatePostBody
{
    /**
     * Name of the service.
     *
     * @var string|null
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec|null
     */
    protected $taskTemplate;
    /**
     * Scheduling mode for the service.
     *
     * @var ServiceSpecMode|null
     */
    protected $mode;
    /**
     * Specification for the update strategy of the service.
     *
     * @var ServiceSpecUpdateConfig|null
     */
    protected $updateConfig;
    /**
     * Specification for the rollback strategy of the service.
     *
     * @var ServiceSpecRollbackConfig|null
     */
    protected $rollbackConfig;
    /**
     * Array of network names or IDs to attach the service to.
     *
     * @var ServiceSpecNetworksItem[]|null
     */
    protected $networks;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec|null
     */
    protected $endpointSpec;

    /**
     * Name of the service.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the service.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

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

    /**
     * User modifiable task configuration.
     */
    public function getTaskTemplate(): ?TaskSpec
    {
        return $this->taskTemplate;
    }

    /**
     * User modifiable task configuration.
     */
    public function setTaskTemplate(?TaskSpec $taskTemplate): self
    {
        $this->taskTemplate = $taskTemplate;

        return $this;
    }

    /**
     * Scheduling mode for the service.
     */
    public function getMode(): ?ServiceSpecMode
    {
        return $this->mode;
    }

    /**
     * Scheduling mode for the service.
     */
    public function setMode(?ServiceSpecMode $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Specification for the update strategy of the service.
     */
    public function getUpdateConfig(): ?ServiceSpecUpdateConfig
    {
        return $this->updateConfig;
    }

    /**
     * Specification for the update strategy of the service.
     */
    public function setUpdateConfig(?ServiceSpecUpdateConfig $updateConfig): self
    {
        $this->updateConfig = $updateConfig;

        return $this;
    }

    /**
     * Specification for the rollback strategy of the service.
     */
    public function getRollbackConfig(): ?ServiceSpecRollbackConfig
    {
        return $this->rollbackConfig;
    }

    /**
     * Specification for the rollback strategy of the service.
     */
    public function setRollbackConfig(?ServiceSpecRollbackConfig $rollbackConfig): self
    {
        $this->rollbackConfig = $rollbackConfig;

        return $this;
    }

    /**
     * Array of network names or IDs to attach the service to.
     *
     * @return ServiceSpecNetworksItem[]|null
     */
    public function getNetworks(): ?array
    {
        return $this->networks;
    }

    /**
     * Array of network names or IDs to attach the service to.
     *
     * @param ServiceSpecNetworksItem[]|null $networks
     */
    public function setNetworks(?array $networks): self
    {
        $this->networks = $networks;

        return $this;
    }

    /**
     * Properties that can be configured to access and load balance a service.
     */
    public function getEndpointSpec(): ?EndpointSpec
    {
        return $this->endpointSpec;
    }

    /**
     * Properties that can be configured to access and load balance a service.
     */
    public function setEndpointSpec(?EndpointSpec $endpointSpec): self
    {
        $this->endpointSpec = $endpointSpec;

        return $this;
    }
}
