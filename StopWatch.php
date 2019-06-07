<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    function __construct($currentTime)
    {
        $this->startTime = $currentTime;
    }

    function getStartTime()
    {
        return $this->startTime;
    }

    function getEndTime()
    {
        return $this->endTime;
    }

    function start($startTime)
    {
        $this->startTime = $startTime;
    }

    function stop($endTime)
    {
        $this->endTime = $endTime;
    }

    function ElapsedTime()
    {
        return (($this->getEndTime() - $this->getStartTime()) * 1000);
    }
}