<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ResourceObject
{
    /**
     * @var int|null
     */
    protected $nanoCPUs;
    /**
     * @var int|null
     */
    protected $memoryBytes;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @var GenericResourcesItem[]|null
     */
    protected $genericResources;

    public function getNanoCPUs(): ?int
    {
        return $this->nanoCPUs;
    }

    public function setNanoCPUs(?int $nanoCPUs): self
    {
        $this->nanoCPUs = $nanoCPUs;

        return $this;
    }

    public function getMemoryBytes(): ?int
    {
        return $this->memoryBytes;
    }

    public function setMemoryBytes(?int $memoryBytes): self
    {
        $this->memoryBytes = $memoryBytes;

        return $this;
    }

    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @return GenericResourcesItem[]|null
     */
    public function getGenericResources(): ?array
    {
        return $this->genericResources;
    }

    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @param GenericResourcesItem[]|null $genericResources
     */
    public function setGenericResources(?array $genericResources): self
    {
        $this->genericResources = $genericResources;

        return $this;
    }
}
