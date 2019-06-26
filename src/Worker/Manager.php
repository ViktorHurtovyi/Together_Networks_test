<?php

namespace App\Worker;


class Manager implements Worker
{

    function writeCode()
    {
        return false;
    }

    function testCode()
    {
        return false;
    }

    function communication()
    {
        return false;
    }

    function draw()
    {
        return false;
    }

    function setTask()
    {
        return true;
    }
}