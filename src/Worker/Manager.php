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

    function can($do): string
    {
        switch ($do) {
            case 'writeCode':
                return 'false';
                break;
            case 'testCode':
                return 'false';
                break;
            case 'communication':
                return 'false';
                break;
            case 'draw':
                return 'false';
                break;
            case 'setTask':
                return 'true';
                break;
            default:
                return 'неверный формат';
                break;
        }
    }
}