<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ImagesPrunePostResponse200
{
    /**
     * Images that were deleted.
     *
     * @var ImageDeleteResponseItem[]|null
     */
    protected $imagesDeleted;
    /**
     * Disk space reclaimed in bytes.
     *
     * @var int|null
     */
    protected $spaceReclaimed;

    /**
     * Images that were deleted.
     *
     * @return ImageDeleteResponseItem[]|null
     */
    public function getImagesDeleted(): ?array
    {
        return $this->imagesDeleted;
    }

    /**
     * Images that were deleted.
     *
     * @param ImageDeleteResponseItem[]|null $imagesDeleted
     */
    public function setImagesDeleted(?array $imagesDeleted): self
    {
        $this->imagesDeleted = $imagesDeleted;

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
