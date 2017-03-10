<?php

/**
 * Created by IntelliJ IDEA.
 * User: kotn0
 * Date: 10.03.2017
 * Time: 9:58
 */
class Student extends Person
{
    private $year;

    function __construct($age, $sex, $year)
    {
        parent::__construct($age, $sex);
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    function study()
    {
        echo "ne :)";
    }
}