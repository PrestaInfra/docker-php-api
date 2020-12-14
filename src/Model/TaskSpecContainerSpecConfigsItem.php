<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecContainerSpecConfigsItem
{
    /**
     * File represents a specific target that is backed by a file.
     *
     * @var TaskSpecContainerSpecConfigsItemFile|null
     */
    protected $file;
    /**
     * ConfigID represents the ID of the specific config that we're referencing.
     *
     * @var string|null
     */
    protected $configID;
    /**
     * ConfigName is the name of the config that this references, but this is just provided for.
     * lookup/display purposes. The config in the reference will be identified by its ID.
     *
     * @var string|null
     */
    protected $configName;

    /**
     * File represents a specific target that is backed by a file.
     */
    public function getFile(): ?TaskSpecContainerSpecConfigsItemFile
    {
        return $this->file;
    }

    /**
     * File represents a specific target that is backed by a file.
     */
    public function setFile(?TaskSpecContainerSpecConfigsItemFile $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * ConfigID represents the ID of the specific config that we're referencing.
     */
    public function getConfigID(): ?string
    {
        return $this->configID;
    }

    /**
     * ConfigID represents the ID of the specific config that we're referencing.
     */
    public function setConfigID(?string $configID): self
    {
        $this->configID = $configID;

        return $this;
    }

    /**
     * ConfigName is the name of the config that this references, but this is just provided for.
     * lookup/display purposes. The config in the reference will be identified by its ID.
     */
    public function getConfigName(): ?string
    {
        return $this->configName;
    }

    /**
     * ConfigName is the name of the config that this references, but this is just provided for.
     * lookup/display purposes. The config in the reference will be identified by its ID.
     */
    public function setConfigName(?string $configName): self
    {
        $this->configName = $configName;

        return $this;
    }
}