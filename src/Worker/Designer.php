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
                return 'true';
                break;
            case 'draw':
                return 'true';
                break;
            case 'setTask':
                return 'false';
                break;
            default:
                return 'неверный формат';
                break;
        }
    }
}