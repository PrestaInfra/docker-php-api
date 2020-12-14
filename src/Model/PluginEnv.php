<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginEnv
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string[]|null
     */
    protected $settable;
    /**
     * @var string|null
     */
    protected $value;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getSettable(): ?array
    {
        return $this->settable;
    }

    /**
     * @param string[]|null $settable
     */
    public function setSettable(?array $settable): self
    {
        $this->settable = $settable;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
