<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainersIdWaitPostResponse200Error
{
    /**
     * Details of an error.
     *
     * @var string|null
     */
    protected $message;

    /**
     * Details of an error.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Details of an error.
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
