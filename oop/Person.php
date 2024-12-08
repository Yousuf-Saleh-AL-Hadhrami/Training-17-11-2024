<?php

class Person
{

    public $name;
    public $address;
    protected $hobbies = [];
    private $password;

    public function __construct($name, $address, $hobbies,  $password)
    {

        $this->name = $name;
        $this->address = $address;
        $this->hobbies = $hobbies;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        return $this;
    }

    public function getName()
    {

        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getHobbies()
    {
        return json_encode($this->hobbies);
    }

    public function getPassword()
    {
        return password_hash($this->password, PASSWORD_DEFAULT);
    }

    public function getAllData()
    {

        return
            "Name : ". $this->name . "<br>" .
            "Address : ". $this->address . "<br>" .
            "Hobbies : ". $this->getHobbies() . "<br>" .
            "Password : ". $this->password;
    }
}
