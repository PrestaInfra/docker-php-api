<?php

declare(strict_types=1);

namespace Docker\API\Model;

class NetworksCreatePostResponse201
{
    /**
     * The ID of the created network.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $warning;

    /**
     * The ID of the created network.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the created network.
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getWarning(): ?string
    {
        return $this->warning;
    }

    public function setWarning(?string $warning): self
    {
        $this->warning = $warning;

        return $this;
    }
}
