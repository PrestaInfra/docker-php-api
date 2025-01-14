<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceSpecModeReplicatedJob
{
    /**
     * The maximum number of replicas to run simultaneously.
     *
     * @var int|null
     */
    protected $maxConcurrent = 1;
    /**
     * The total number of replicas desired to reach the Completed
     * state. If unset, will default to the value of `MaxConcurrent`.
     *
     * @var int|null
     */
    protected $totalCompletions;

    /**
     * The maximum number of replicas to run simultaneously.
     */
    public function getMaxConcurrent(): ?int
    {
        return $this->maxConcurrent;
    }

    /**
     * The maximum number of replicas to run simultaneously.
     */
    public function setMaxConcurrent(?int $maxConcurrent): self
    {
        $this->maxConcurrent = $maxConcurrent;

        return $this;
    }

    /**
     * The total number of replicas desired to reach the Completed
     * state. If unset, will default to the value of `MaxConcurrent`.
     */
    public function getTotalCompletions(): ?int
    {
        return $this->totalCompletions;
    }

    /**
     * The total number of replicas desired to reach the Completed
     * state. If unset, will default to the value of `MaxConcurrent`.
     */
    public function setTotalCompletions(?int $totalCompletions): self
    {
        $this->totalCompletions = $totalCompletions;

        return $this;
    }
}
