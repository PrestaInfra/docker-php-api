<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Image
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string[]|null
     */
    protected $repoTags;
    /**
     * @var string[]|null
     */
    protected $repoDigests;
    /**
     * @var string|null
     */
    protected $parent;
    /**
     * @var string|null
     */
    protected $comment;
    /**
     * @var string|null
     */
    protected $created;
    /**
     * @var string|null
     */
    protected $container;
    /**
     * Configuration for a container that is portable between hosts.
     *
     * @var ContainerConfig|null
     */
    protected $containerConfig;
    /**
     * @var string|null
     */
    protected $dockerVersion;
    /**
     * @var string|null
     */
    protected $author;
    /**
     * Configuration for a container that is portable between hosts.
     *
     * @var ContainerConfig|null
     */
    protected $config;
    /**
     * @var string|null
     */
    protected $architecture;
    /**
     * @var string|null
     */
    protected $os;
    /**
     * @var string|null
     */
    protected $osVersion;
    /**
     * @var int|null
     */
    protected $size;
    /**
     * @var int|null
     */
    protected $virtualSize;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData|null
     */
    protected $graphDriver;
    /**
     * @var ImageRootFS|null
     */
    protected $rootFS;
    /**
     * @var ImageMetadata|null
     */
    protected $metadata;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRepoTags(): ?array
    {
        return $this->repoTags;
    }

    /**
     * @param string[]|null $repoTags
     */
    public function setRepoTags(?array $repoTags): self
    {
        $this->repoTags = $repoTags;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRepoDigests(): ?array
    {
        return $this->repoDigests;
    }

    /**
     * @param string[]|null $repoDigests
     */
    public function setRepoDigests(?array $repoDigests): self
    {
        $this->repoDigests = $repoDigests;

        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getCreated(): ?string
    {
        return $this->created;
    }

    public function setCreated(?string $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getContainer(): ?string
    {
        return $this->container;
    }

    public function setContainer(?string $container): self
    {
        $this->container = $container;

        return $this;
    }

    /**
     * Configuration for a container that is portable between hosts.
     */
    public function getContainerConfig(): ?ContainerConfig
    {
        return $this->containerConfig;
    }

    /**
     * Configuration for a container that is portable between hosts.
     */
    public function setContainerConfig(?ContainerConfig $containerConfig): self
    {
        $this->containerConfig = $containerConfig;

        return $this;
    }

    public function getDockerVersion(): ?string
    {
        return $this->dockerVersion;
    }

    public function setDockerVersion(?string $dockerVersion): self
    {
        $this->dockerVersion = $dockerVersion;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Configuration for a container that is portable between hosts.
     */
    public function getConfig(): ?ContainerConfig
    {
        return $this->config;
    }

    /**
     * Configuration for a container that is portable between hosts.
     */
    public function setConfig(?ContainerConfig $config): self
    {
        $this->config = $config;

        return $this;
    }

    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }

    public function setArchitecture(?string $architecture): self
    {
        $this->architecture = $architecture;

        return $this;
    }

    public function getOs(): ?string
    {
        return $this->os;
    }

    public function setOs(?string $os): self
    {
        $this->os = $os;

        return $this;
    }

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;

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

    public function getVirtualSize(): ?int
    {
        return $this->virtualSize;
    }

    public function setVirtualSize(?int $virtualSize): self
    {
        $this->virtualSize = $virtualSize;

        return $this;
    }

    /**
     * Information about a container's graph driver.
     */
    public function getGraphDriver(): ?GraphDriverData
    {
        return $this->graphDriver;
    }

    /**
     * Information about a container's graph driver.
     */
    public function setGraphDriver(?GraphDriverData $graphDriver): self
    {
        $this->graphDriver = $graphDriver;

        return $this;
    }

    public function getRootFS(): ?ImageRootFS
    {
        return $this->rootFS;
    }

    public function setRootFS(?ImageRootFS $rootFS): self
    {
        $this->rootFS = $rootFS;

        return $this;
    }

    public function getMetadata(): ?ImageMetadata
    {
        return $this->metadata;
    }

    public function setMetadata(?ImageMetadata $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
