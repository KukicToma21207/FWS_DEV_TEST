<?php

require_once("task_3.php");

class BirdController
{
    public function feed(Bird $bird)
    {
        $bird->eat();
    }


    public function releaseFromCliff(Eagle $bird)
    {
        $bird->fly();
    }


    public function runFrom(Ostrich $bird)
    {
        $bird->run();
    }


    public function walk(Bird $bird)
    {
        $bird->walk();
    }
}

