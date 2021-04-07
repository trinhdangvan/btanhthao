<?php
class Preson{
    var $name;
    public function __construct($personsName)
    {
        $this->name=$personsName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}