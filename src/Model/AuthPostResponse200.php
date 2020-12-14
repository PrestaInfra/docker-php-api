<?php

declare(strict_types=1);

namespace Docker\API\Model;

class AuthPostResponse200
{
    /**
     * The status of the authentication.
     *
     * @var string|null
     */
    protected $status;
    /**
     * An opaque token used to authenticate a user after a successful login.
     *
     * @var string|null
     */
    protected $identityToken;

    /**
     * The status of the authentication.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The status of the authentication.
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * An opaque token used to authenticate a user after a successful login.
     */
    public function getIdentityToken(): ?string
    {
        return $this->identityToken;
    }

    /**
     * An opaque token used to authenticate a user after a successful login.
     */
    public function setIdentityToken(?string $identityToken): self
    {
        $this->identityToken = $identityToken;

        return $this;
    }
}
