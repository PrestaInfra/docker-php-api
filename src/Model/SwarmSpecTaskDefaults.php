<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SwarmSpecTaskDefaults
{
    /**
     * The log driver to use for tasks created in the orchestrator if
     * unspecified by a service.
     *
     * Updating this value only affects new tasks. Existing tasks continue
     * to use their previously configured log driver until recreated.
     *
     * @var SwarmSpecTaskDefaultsLogDriver|null
     */
    protected $logDriver;

    /**
     * The log driver to use for tasks created in the orchestrator if
     * unspecified by a service.
     *
     * Updating this value only affects new tasks. Existing tasks continue
     * to use their previously configured log driver until recreated.
     */
    public function getLogDriver(): ?SwarmSpecTaskDefaultsLogDriver
    {
        return $this->logDriver;
    }

    /**
     * The log driver to use for tasks created in the orchestrator if
     * unspecified by a service.
     *
     * Updating this value only affects new tasks. Existing tasks continue
     * to use their previously configured log driver until recreated.
     */
    public function setLogDriver(?SwarmSpecTaskDefaultsLogDriver $logDriver): self
    {
        $this->logDriver = $logDriver;

        return $this;
    }
}
