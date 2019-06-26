<?php

namespace App\Worker;


class Developer implements Worker
{

    function writeCode(): bool
    {
        return true;
    }

    function testCode(): bool
    {
        return true;
    }

    function communication(): bool
    {
        return true;
    }

    function draw(): bool
    {
        return false;
    }

    function setTask(): bool
    {
        return false;
    }

    function can($do): string
    {
        switch ($do) {
            case 'writeCode':
                return 'true';
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
                return 'false';
                break;
            default:
                return 'неверный формат';
                break;
        }
    }
}