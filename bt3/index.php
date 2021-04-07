<?php

class fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $on;
    private $speed;
    private $radius;
    private $color;
    function __construct()
    {
        $this->on = false;
        $this->speed = self::SLOW;
        $this->radius = 5;
        $this->color = "pink";
    }
    public function setspeed($speed)
    {
        switch ($speed) {
            case 1:
                $this->speed = self::SLOW;
                break;
            case 2:
                $this->speed = self::MEDIUM;
                break;
            case 3:
                $this->speed = self::FAST;
                break;
        }
    }
    public function seton($on){
        $this->on=$on;
    }
    public function setradius($radius){
        $this->radius=$radius;
    }
    public function setcolor($color){
        $this->color=$color;
    }
    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }
    /**
     * @return false
     */
    public function getOn()
    {
        return $this->on;
    }
    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }
    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    public function create(){
        if ($this->on== true)
            echo " quạt đang chạy với tốc độ: ".$this->getSpeed()." bán kính là: ".$this->getRadius()." quạt có màu: ".$this->getColor();
        else
            echo "quạt đang tắt";
    }
}
