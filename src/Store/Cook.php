<?php
namespace Store;


class Cook
{
    private $bakingHour = 0;
    private $bakingMinute = 0;
    private $bakingSecond = 0;

    private $temperature = 180;


    public function bake()
    {
        $bakeTime = new \DateInterval("PT{$this->bakingHour}H{$this->bakingMinute}M{$this->bakingSecond}S");

        echo "Baking... <br />";
        echo "Time {$bakeTime->format('%H:%I:%S')} <br />";
        echo "Temperature {$this->temperature} (temperatur format not implemented)";
    }

    /**
     * @param mixed $bakingHour
     */
    public function setBakingHour($bakingHour)
    {
        $this->bakingHour = $bakingHour;
    }

    /**
     * @return mixed
     */
    public function getBakingHour()
    {
        return $this->bakingHour;
    }

    /**
     * @param mixed $bakingMinute
     */
    public function setBakingMinute($bakingMinute)
    {
        $this->bakingMinute = $bakingMinute;
    }

    /**
     * @return mixed
     */
    public function getBakingMinute()
    {
        return $this->bakingMinute;
    }

    /**
     * @param mixed $bakingSecond
     */
    public function setBakingSecond($bakingSecond)
    {
        $this->bakingSecond = $bakingSecond;
    }

    /**
     * @return mixed
     */
    public function getBakingSecond()
    {
        return $this->bakingSecond;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }



} 