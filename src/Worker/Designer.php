<?php

namespace App\Worker;


class Designer implements Worker
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
        return true;
    }

    function draw()
    {
        return true;
    }

    function setTask()
    {
        return false;
    }
}