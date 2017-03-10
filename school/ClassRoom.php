<?php

/**
 * Created by IntelliJ IDEA.
 * User: kotn0
 * Date: 10.03.2017
 * Time: 10:17
 */
class ClassRoom
{
    private $seminars = array();
    private $number;
    private $capacity;

    /**
     * ClassRoom constructor.
     * @param $number
     * @param $capacity
     */
    public function __construct($number, $capacity)
    {
        $this->number = $number;
        $this->capacity = $capacity;
    }

    /**
     * @return array
     */
    public function getSeminars(): array
    {
        return $this->seminars;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    public function addSeminar($seminar){
        $this->seminars.add($seminar);
    }

    public function deleteSeminar($seminar){
        if(($key = array_search($seminar, $this->seminars)) !== false) {
            unset($this->seminars[$key]);
        }
    }

}