<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginsPullPostBodyItem
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
    public function getValue(): ?array
    {
        return $this->value;
    }

    /**
     * @param string[]|null $value
     */
    public function setValue(?array $value): self
    {
        $this->value = $value;

        return $this;
    }
}
