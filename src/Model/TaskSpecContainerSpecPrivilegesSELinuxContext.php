<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecContainerSpecPrivilegesSELinuxContext
{
    /**
     * Disable SELinux.
     *
     * @var bool|null
     */
    protected $disable;
    /**
     * SELinux user label.
     *
     * @var string|null
     */
    protected $user;
    /**
     * SELinux role label.
     *
     * @var string|null
     */
    protected $role;
    /**
     * SELinux type label.
     *
     * @var string|null
     */
    protected $type;
    /**
     * SELinux level label.
     *
     * @var string|null
     */
    protected $level;

    /**
     * Disable SELinux.
     */
    public function getDisable(): ?bool
    {
        return $this->disable;
    }

    /**
     * Disable SELinux.
     */
    public function setDisable(?bool $disable): self
    {
        $this->disable = $disable;

        return $this;
    }

    /**
     * SELinux user label.
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * SELinux user label.
     */
    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * SELinux role label.
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * SELinux role label.
     */
    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * SELinux type label.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * SELinux type label.
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * SELinux level label.
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * SELinux level label.
     */
    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }
}
