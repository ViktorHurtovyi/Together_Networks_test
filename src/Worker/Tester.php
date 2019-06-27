<?php

namespace App\Worker;


class Tester implements Worker
{

    function writeCode()
    {
        return false;
    }

    function testCode()
    {
        return true;
    }

    function communication()
    {
        return true;
    }

    function draw()
    {
        return false;
    }

    function setTask()
    {
        return true;
    }
    public function __call($name, $arguments)
    {
        return false;
    }
}