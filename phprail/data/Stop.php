<?php

class Stop {

	 private $station; //Station
    private $time;		//DateTime
    private	$delay;		//int 

    function __construct(Station $station, DateTime $time, $delay)
    {
        $this->station = $station;
        $this->time = $time;
        $this->delay = $delay;
    }

    public function getDelay()
    {
        return $this->delay;
    }

    public function getStation()
    {
        return $this->station;
    }

    public function getTime()
    {
        return $this->time;
    }

}

?>