<?php

class ActivityAdvisor
{
    private $activityProvider;
    private $outputHandler;

    public function __construct(ActivityProviderInterface $activityProvider, OutputHandlerInterface $outputHandler)
    {
        $this->activityProvider = $activityProvider;
        $this->outputHandler = $outputHandler;
    }

    public function getAndOutputActivity(int $participants, string $type): void
    {
        $advice = $this->activityProvider->getActivity($participants, $type);

        $this->outputHandler->output($advice);
    }
}