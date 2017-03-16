<?php

/**
 * Created by IntelliJ IDEA.
 * User: kotn0
 * Date: 10.03.2017
 * Time: 9:48
 */
abstract class Person
{
    protected $name;
    protected $age;
    protected $sex;

    function __construct($age, $sex)
    {
        $this->age = $age;
        $this->sex = $sex;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    function talk(){
        echo 'Ahoj';
    }
}