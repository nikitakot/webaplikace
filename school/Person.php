<?php

/**
 * Created by IntelliJ IDEA.
 * User: kotn0
 * Date: 10.03.2017
 * Time: 9:48
 */
abstract class Person
{
    protected $age;
    protected $sex;

    function __construct($age, $sex)
    {
        $this->age = $age;
        $this->sex = $sex;
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

    function talk(){
        echo 'Ahoj';
    }
}