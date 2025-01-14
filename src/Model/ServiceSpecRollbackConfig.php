<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceSpecRollbackConfig
{
    /**
     * Maximum number of tasks to be rolled back in one iteration (0 means
     * unlimited parallelism).
     *
     * @var int|null
     */
    protected $parallelism;
    /**
     * Amount of time between rollback iterations, in nanoseconds.
     *
     * @var int|null
     */
    protected $delay;
    /**
     * Action to take if an rolled back task fails to run, or stops
     * running during the rollback.
     *
     * @var string|null
     */
    protected $failureAction;
    /**
     * Amount of time to monitor each rolled back task for failures, in
     * nanoseconds.
     *
     * @var int|null
     */
    protected $monitor;
    /**
     * The fraction of tasks that may fail during a rollback before the
     * failure action is invoked, specified as a floating point number
     * between 0 and 1.
     *
     * @var float|null
     */
    protected $maxFailureRatio;
    /**
     * The order of operations when rolling back a task. Either the old
     * task is shut down before the new task is started, or the new task
     * is started before the old task is shut down.
     *
     * @var string|null
     */
    protected $order;

    /**
     * Maximum number of tasks to be rolled back in one iteration (0 means
     * unlimited parallelism).
     */
    public function getParallelism(): ?int
    {
        return $this->parallelism;
    }

    /**
     * Maximum number of tasks to be rolled back in one iteration (0 means
     * unlimited parallelism).
     */
    public function setParallelism(?int $parallelism): self
    {
        $this->parallelism = $parallelism;

        return $this;
    }

    /**
     * Amount of time between rollback iterations, in nanoseconds.
     */
    public function getDelay(): ?int
    {
        return $this->delay;
    }

    /**
     * Amount of time between rollback iterations, in nanoseconds.
     */
    public function setDelay(?int $delay): self
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * Action to take if an rolled back task fails to run, or stops
     * running during the rollback.
     */
    public function getFailureAction(): ?string
    {
        return $this->failureAction;
    }

    /**
     * Action to take if an rolled back task fails to run, or stops
     * running during the rollback.
     */
    public function setFailureAction(?string $failureAction): self
    {
        $this->failureAction = $failureAction;

        return $this;
    }

    /**
     * Amount of time to monitor each rolled back task for failures, in
     * nanoseconds.
     */
    public function getMonitor(): ?int
    {
        return $this->monitor;
    }

    /**
     * Amount of time to monitor each rolled back task for failures, in
     * nanoseconds.
     */
    public function setMonitor(?int $monitor): self
    {
        $this->monitor = $monitor;

        return $this;
    }

    /**
     * The fraction of tasks that may fail during a rollback before the
     * failure action is invoked, specified as a floating point number
     * between 0 and 1.
     */
    public function getMaxFailureRatio(): ?float
    {
        return $this->maxFailureRatio;
    }

    /**
     * The fraction of tasks that may fail during a rollback before the
     * failure action is invoked, specified as a floating point number
     * between 0 and 1.
     */
    public function setMaxFailureRatio(?float $maxFailureRatio): self
    {
        $this->maxFailureRatio = $maxFailureRatio;

        return $this;
    }

    /**
     * The order of operations when rolling back a task. Either the old
     * task is shut down before the new task is started, or the new task
     * is started before the old task is shut down.
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * The order of operations when rolling back a task. Either the old
     * task is shut down before the new task is started, or the new task
     * is started before the old task is shut down.
     */
    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }
}
