<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainersIdJsonGetResponse200
{
    /**
     * The ID of the container.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The time the container was created.
     *
     * @var string|null
     */
    protected $created;
    /**
     * The path to the command being run.
     *
     * @var string|null
     */
    protected $path;
    /**
     * The arguments to the command being run.
     *
     * @var string[]|null
     */
    protected $args;
    /**
     * ContainerState stores container's running state. It's part of ContainerJSONBase
     * and will be returned by the "inspect" command.
     *
     * @var ContainerState|null
     */
    protected $state;
    /**
     * The container's image ID.
     *
     * @var string|null
     */
    protected $image;
    /**
     * @var string|null
     */
    protected $resolvConfPath;
    /**
     * @var string|null
     */
    protected $hostnamePath;
    /**
     * @var string|null
     */
    protected $hostsPath;
    /**
     * @var string|null
     */
    protected $logPath;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var int|null
     */
    protected $restartCount;
    /**
     * @var string|null
     */
    protected $driver;
    /**
     * @var string|null
     */
    protected $platform;
    /**
     * @var string|null
     */
    protected $mountLabel;
    /**
     * @var string|null
     */
    protected $processLabel;
    /**
     * @var string|null
     */
    protected $appArmorProfile;
    /**
     * IDs of exec instances that are running in the container.
     *
     * @var string[]|null
     */
    protected $execIDs;
    /**
     * Container configuration that depends on the host we are running on.
     *
     * @var HostConfig|null
     */
    protected $hostConfig;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData|null
     */
    protected $graphDriver;
    /**
     * The size of files that have been created or changed by this
     * container.
     *
     * @var int|null
     */
    protected $sizeRw;
    /**
     * The total size of all the files in this container.
     *
     * @var int|null
     */
    protected $sizeRootFs;
    /**
     * @var MountPoint[]|null
     */
    protected $mounts;
    /**
     * Configuration for a container that is portable between hosts.
     *
     * @var ContainerConfig|null
     */
    protected $config;
    /**
     * NetworkSettings exposes the network settings in the API.
     *
     * @var NetworkSettings|null
     */
    protected $networkSettings;

    /**
     * The ID of the container.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the container.
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The time the container was created.
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * The time the container was created.
     */
    public function setCreated(?string $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * The path to the command being run.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * The path to the command being run.
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * The arguments to the command being run.
     *
     * @return string[]|null
     */
    public function getArgs(): ?array
    {
        return $this->args;
    }

    /**
     * The arguments to the command being run.
     *
     * @param string[]|null $args
     */
    public function setArgs(?array $args): self
    {
        $this->args = $args;

        return $this;
    }

    /**
     * ContainerState stores container's running state. It's part of ContainerJSONBase
     * and will be returned by the "inspect" command.
     */
    public function getState(): ?ContainerState
    {
        return $this->state;
    }

    /**
     * ContainerState stores container's running state. It's part of ContainerJSONBase
     * and will be returned by the "inspect" command.
     */
    public function setState(?ContainerState $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * The container's image ID.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * The container's image ID.
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getResolvConfPath(): ?string
    {
        return $this->resolvConfPath;
    }

    public function setResolvConfPath(?string $resolvConfPath): self
    {
        $this->resolvConfPath = $resolvConfPath;

        return $this;
    }

    public function getHostnamePath(): ?string
    {
        return $this->hostnamePath;
    }

    public function setHostnamePath(?string $hostnamePath): self
    {
        $this->hostnamePath = $hostnamePath;

        return $this;
    }

    public function getHostsPath(): ?string
    {
        return $this->hostsPath;
    }

    public function setHostsPath(?string $hostsPath): self
    {
        $this->hostsPath = $hostsPath;

        return $this;
    }

    public function getLogPath(): ?string
    {
        return $this->logPath;
    }

    public function setLogPath(?string $logPath): self
    {
        $this->logPath = $logPath;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRestartCount(): ?int
    {
        return $this->restartCount;
    }

    public function setRestartCount(?int $restartCount): self
    {
        $this->restartCount = $restartCount;

        return $this;
    }

    public function getDriver(): ?string
    {
        return $this->driver;
    }

    public function setDriver(?string $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    public function getMountLabel(): ?string
    {
        return $this->mountLabel;
    }

    public function setMountLabel(?string $mountLabel): self
    {
        $this->mountLabel = $mountLabel;

        return $this;
    }

    public function getProcessLabel(): ?string
    {
        return $this->processLabel;
    }

    public function setProcessLabel(?string $processLabel): self
    {
        $this->processLabel = $processLabel;

        return $this;
    }

    public function getAppArmorProfile(): ?string
    {
        return $this->appArmorProfile;
    }

    public function setAppArmorProfile(?string $appArmorProfile): self
    {
        $this->appArmorProfile = $appArmorProfile;

        return $this;
    }

    /**
     * IDs of exec instances that are running in the container.
     *
     * @return string[]|null
     */
    public function getExecIDs(): ?array
    {
        return $this->execIDs;
    }

    /**
     * IDs of exec instances that are running in the container.
     *
     * @param string[]|null $execIDs
     */
    public function setExecIDs(?array $execIDs): self
    {
        $this->execIDs = $execIDs;

        return $this;
    }

    /**
     * Container configuration that depends on the host we are running on.
     */
    public function getHostConfig(): ?HostConfig
    {
        return $this->hostConfig;
    }

    /**
     * Container configuration that depends on the host we are running on.
     */
    public function setHostConfig(?HostConfig $hostConfig): self
    {
        $this->hostConfig = $hostConfig;

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

    /**
     * The size of files that have been created or changed by this
     * container.
     */
    public function getSizeRw(): ?int
    {
        return $this->sizeRw;
    }

    /**
     * The size of files that have been created or changed by this
     * container.
     */
    public function setSizeRw(?int $sizeRw): self
    {
        $this->sizeRw = $sizeRw;

        return $this;
    }

    /**
     * The total size of all the files in this container.
     */
    public function getSizeRootFs(): ?int
    {
        return $this->sizeRootFs;
    }

    /**
     * The total size of all the files in this container.
     */
    public function setSizeRootFs(?int $sizeRootFs): self
    {
        $this->sizeRootFs = $sizeRootFs;

        return $this;
    }

    /**
     * @return MountPoint[]|null
     */
    public function getMounts(): ?array
    {
        return $this->mounts;
    }

    /**
     * @param MountPoint[]|null $mounts
     */
    public function setMounts(?array $mounts): self
    {
        $this->mounts = $mounts;

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

    /**
     * NetworkSettings exposes the network settings in the API.
     */
    public function getNetworkSettings(): ?NetworkSettings
    {
        return $this->networkSettings;
    }

    /**
     * NetworkSettings exposes the network settings in the API.
     */
    public function setNetworkSettings(?NetworkSettings $networkSettings): self
    {
        $this->networkSettings = $networkSettings;

        return $this;
    }
}
