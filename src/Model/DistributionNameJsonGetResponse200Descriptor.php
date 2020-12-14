<?php

declare(strict_types=1);

namespace Docker\API\Model;

class DistributionNameJsonGetResponse200Descriptor
{
    /**
     * @var string|null
     */
    protected $mediaType;
    /**
     * @var int|null
     */
    protected $size;
    /**
     * @var string|null
     */
    protected $digest;
    /**
     * @var string[]|null
     */
    protected $uRLs;

    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }

    public function setMediaType(?string $mediaType): self
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getDigest(): ?string
    {
        return $this->digest;
    }

    public function setDigest(?string $digest): self
    {
        $this->digest = $digest;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getURLs(): ?array
    {
        return $this->uRLs;
    }

    /**
     * @param string[]|null $uRLs
     */
    public function setURLs(?array $uRLs): self
    {
        $this->uRLs = $uRLs;

        return $this;
    }
}
