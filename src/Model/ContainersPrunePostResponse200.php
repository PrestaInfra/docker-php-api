<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainersPrunePostResponse200
{
    /**
     * Container IDs that were deleted.
     *
     * @var string[]|null
     */
    protected $containersDeleted;
    /**
     * Disk space reclaimed in bytes.
     *
     * @var int|null
     */
    protected $spaceReclaimed;

    /**
     * Container IDs that were deleted.
     *
     * @return string[]|null
     */
    public function getContainersDeleted(): ?array
    {
        return $this->containersDeleted;
    }

    /**
     * Container IDs that were deleted.
     *
     * @param string[]|null $containersDeleted
     */
    public function setContainersDeleted(?array $containersDeleted): self
    {
        $this->containersDeleted = $containersDeleted;

        return $this;
    }

    /**
     * Disk space reclaimed in bytes.
     */
    public function getSpaceReclaimed(): ?int
    {
        return $this->spaceReclaimed;
    }

    /**
     * Disk space reclaimed in bytes.
     */
    public function setSpaceReclaimed(?int $spaceReclaimed): self
    {
        $this->spaceReclaimed = $spaceReclaimed;

        return $this;
    }
}
