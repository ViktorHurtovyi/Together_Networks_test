<?php

namespace App\Worker;


class Developer implements Worker
{

    function writeCode():bool
    {
        return true;
    }

    function testCode():bool
    {
        return true;
    }

    function communication():bool
    {
        return true;
    }

    function draw():bool
    {
        return false;
    }

    function setTask():bool
    {
        return false;
    }
}