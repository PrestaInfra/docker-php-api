<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SystemDfGetResponse200
{
    /**
     * @var int|null
     */
    protected $layersSize;
    /**
     * @var ImageSummary[]|null
     */
    protected $images;
    /**
     * @var ContainerSummaryItem[][]|null
     */
    protected $containers;
    /**
     * @var Volume[]|null
     */
    protected $volumes;

    public function getLayersSize(): ?int
    {
        return $this->layersSize;
    }

    public function setLayersSize(?int $layersSize): self
    {
        $this->layersSize = $layersSize;

        return $this;
    }

    /**
     * @return ImageSummary[]|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param ImageSummary[]|null $images
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return ContainerSummaryItem[][]|null
     */
    public function getContainers(): ?array
    {
        return $this->containers;
    }

    /**
     * @param ContainerSummaryItem[][]|null $containers
     */
    public function setContainers(?array $containers): self
    {
        $this->containers = $containers;

        return $this;
    }

    /**
     * @return Volume[]|null
     */
    public function getVolumes(): ?array
    {
        return $this->volumes;
    }

    /**
     * @param Volume[]|null $volumes
     */
    public function setVolumes(?array $volumes): self
    {
        $this->volumes = $volumes;

        return $this;
    }
}
