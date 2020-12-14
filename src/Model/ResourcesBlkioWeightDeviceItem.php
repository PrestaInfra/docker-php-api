<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ResourcesBlkioWeightDeviceItem
{
    /**
     * @var string|null
     */
    protected $path;
    /**
     * @var int|null
     */
    protected $weight;

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
