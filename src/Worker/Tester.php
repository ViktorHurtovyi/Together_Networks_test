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

    function can($do): string
    {
        switch ($do) {
            case 'writeCode':
                return 'false';
                break;
            case 'testCode':
                return 'true';
                break;
            case 'communication':
                return 'true';
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