<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Platform
{
    /**
     * Architecture represents the hardware architecture (for example,
     * `x86_64`).
     *
     * @var string|null
     */
    protected $architecture;
    /**
     * OS represents the Operating System (for example, `linux` or `windows`).
     *
     * @var string|null
     */
    protected $oS;

    /**
     * Architecture represents the hardware architecture (for example,
     * `x86_64`).
     */
    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }

    /**
     * Architecture represents the hardware architecture (for example,
     * `x86_64`).
     */
    public function setArchitecture(?string $architecture): self
    {
        $this->architecture = $architecture;

        return $this;
    }

    /**
     * OS represents the Operating System (for example, `linux` or `windows`).
     */
    public function getOS(): ?string
    {
        return $this->oS;
    }

    /**
     * OS represents the Operating System (for example, `linux` or `windows`).
     */
    public function setOS(?string $oS): self
    {
        $this->oS = $oS;

        return $this;
    }
}
