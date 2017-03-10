<?php

/**
 * Created by IntelliJ IDEA.
 * User: kotn0
 * Date: 10.03.2017
 * Time: 10:03
 */
class Teacher extends Person
{
    private $title;

    public function __construct($age, $sex, $title)
    {
        $this->title =$title;
        parent::__construct($age, $sex);
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}