<?php 

require_once "Person.php";


class Student extends Person {

    public $stdId;
    public $gpa;

    public function __construct($name, $address, $hobbies , $password, $stdId, $gpa) {
        
        $this->stdId = $stdId;
        $this->gpa = $gpa;

        parent::__construct($name, $address, $hobbies , $password);
    }

    // This method Overrides the Parent Person class method
    public function getAllData()
    {

        $data = parent::getAllData() ."<br>";

        $data .= "Student Name : " .$this->stdId ."<br>";
        $data .= "Student GPA : "  .$this->gpa ."<br>";

        return $data;

    }



}