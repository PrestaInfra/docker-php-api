<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecPlacement
{
    /**
     * An array of constraints.
     *
     * @var string[]|null
     */
    protected $constraints;
    /**
     * Preferences provide a way to make the scheduler aware of factors such as topology. They are provided in order from highest to lowest precedence.
     *
     * @var TaskSpecPlacementPreferencesItem[]|null
     */
    protected $preferences;
    /**
     * Platforms stores all the platforms that the service's image can.
     * run on. This field is used in the platform filter for scheduling.
     * If empty, then the platform filter is off, meaning there are no
     * scheduling restrictions.
     *
     * @var Platform[]|null
     */
    protected $platforms;

    /**
     * An array of constraints.
     *
     * @return string[]|null
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }

    /**
     * An array of constraints.
     *
     * @param string[]|null $constraints
     */
    public function setConstraints(?array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }

    /**
     * Preferences provide a way to make the scheduler aware of factors such as topology. They are provided in order from highest to lowest precedence.
     *
     * @return TaskSpecPlacementPreferencesItem[]|null
     */
    public function getPreferences(): ?array
    {
        return $this->preferences;
    }

    /**
     * Preferences provide a way to make the scheduler aware of factors such as topology. They are provided in order from highest to lowest precedence.
     *
     * @param TaskSpecPlacementPreferencesItem[]|null $preferences
     */
    public function setPreferences(?array $preferences): self
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Platforms stores all the platforms that the service's image can.
     * run on. This field is used in the platform filter for scheduling.
     * If empty, then the platform filter is off, meaning there are no
     * scheduling restrictions.
     *
     * @return Platform[]|null
     */
    public function getPlatforms(): ?array
    {
        return $this->platforms;
    }

    /**
     * Platforms stores all the platforms that the service's image can.
     * run on. This field is used in the platform filter for scheduling.
     * If empty, then the platform filter is off, meaning there are no
     * scheduling restrictions.
     *
     * @param Platform[]|null $platforms
     */
    public function setPlatforms(?array $platforms): self
    {
        $this->platforms = $platforms;

        return $this;
    }
}
