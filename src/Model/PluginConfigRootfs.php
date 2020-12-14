<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginConfigRootfs
{
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string[]|null
     */
    protected $diffIds;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getDiffIds(): ?array
    {
        return $this->diffIds;
    }

    /**
     * @param string[]|null $diffIds
     */
    public function setDiffIds(?array $diffIds): self
    {
        $this->diffIds = $diffIds;

        return $this;
    }
}
