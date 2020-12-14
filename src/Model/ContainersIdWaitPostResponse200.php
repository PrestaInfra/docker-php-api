<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainersIdWaitPostResponse200
{
    /**
     * Exit code of the container.
     *
     * @var int|null
     */
    protected $statusCode;
    /**
     * container waiting error, if any.
     *
     * @var ContainersIdWaitPostResponse200Error|null
     */
    protected $error;

    /**
     * Exit code of the container.
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * Exit code of the container.
     */
    public function setStatusCode(?int $statusCode): self
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * container waiting error, if any.
     */
    public function getError(): ?ContainersIdWaitPostResponse200Error
    {
        return $this->error;
    }

    /**
     * container waiting error, if any.
     */
    public function setError(?ContainersIdWaitPostResponse200Error $error): self
    {
        $this->error = $error;

        return $this;
    }
}
