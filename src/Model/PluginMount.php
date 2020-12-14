<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginMount
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
    protected $source;
    /**
     * @var string|null
     */
    protected $destination;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string[]|null
     */
    protected $options;

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

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

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
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param string[]|null $options
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }
}
