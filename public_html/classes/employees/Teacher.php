<?php

namespace classes\employees;

class Teacher
{
    private $name;
    private $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender): void
    {
        $this->gender = $gender;
    }
}