<?php

declare(strict_types=1);

namespace Docker\API\Model;

class EngineDescription
{
    /**
     * @var string|null
     */
    protected $engineVersion;
    /**
     * @var string[]|null
     */
    protected $labels;
    /**
     * @var EngineDescriptionPluginsItem[]|null
     */
    protected $plugins;

    public function getEngineVersion(): ?string
    {
        return $this->engineVersion;
    }

    public function setEngineVersion(?string $engineVersion): self
    {
        $this->engineVersion = $engineVersion;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }

    /**
     * @param string[]|null $labels
     */
    public function setLabels(?iterable $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return EngineDescriptionPluginsItem[]|null
     */
    public function getPlugins(): ?array
    {
        return $this->plugins;
    }

    /**
     * @param EngineDescriptionPluginsItem[]|null $plugins
     */
    public function setPlugins(?array $plugins): self
    {
        $this->plugins = $plugins;

        return $this;
    }
}