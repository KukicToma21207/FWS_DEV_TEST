<?php


interface Animal
{
    public function setGender(String $gender);
    public function eat();
}



abstract class Bird implements Animal
{
    protected $gender = "";

    abstract public function walk();
}



class Ostrich extends Bird
{
    public function setGender(String $newGender)
    {
        $this->gender = empty($newGender) ? "" : $newGender;
    }


    public function walk()
    {
        echo "<h3>Ostrich is walking!</h3>";
    }


    public function run()
    {
        echo "<h3>Ostrich is running, and fast too!</h3>";
    }


    public function eat()
    {
        echo "<h3>Ostrich is eating some seeds!</h3>";
    }


    public function render() {
        if(empty($this->gender)) {
            echo "Gender for this ostrich is not set.";
        } else {
            echo "<h3>This ostrich is " . $this->gender . "</h3>";
        }
    }

}



class Eagle extends Bird
{
    public function setGender(String $newGender)
    {
        $this->gender = empty($newGender) ? "" : $newGender;
    }


    public function walk()
    {
        echo "<h3>Eagle is walking, a little slow!</h3>";
    }


    public function fly()
    {
        echo "<h3>Eagle is flying, and very high too!</h3>";
    }


    public function eat()
    {
        echo "<h3>Eagle is eating a mouse!</h3>";
    }


    public function render() {
        if(empty($this->gender)) {
            echo "Gender for this eagle is not set.";
        } else {
            echo "<h3>This eagle is " . $this->gender . "</h3>";
        }
    }
}

