<?php

/**
 * Created by IntelliJ IDEA.
 * User: kotn0
 * Date: 10.03.2017
 * Time: 10:10
 */
class Seminar
{
    private $teacher;
    private $classroom;
    private $name;
    private $credits;
    private $time;

    /**
     * Seminar constructor.
     * @param $name
     * @param $credits
     */
    public function __construct($name, $credits, $time)
    {
        $this->name = $name;
        $this->credits = $credits;
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * @return mixed
     */
    public function getClassroom()
    {
        return $this->classroom;
    }

    /**
     * @param mixed $classroom
     */
    public function setClassroom($classroom)
    {
        $this->classroom = $classroom;
    }
}