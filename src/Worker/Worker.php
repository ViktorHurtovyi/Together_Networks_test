<?php

namespace App\Worker;


interface Worker
{
    function writeCode();
    function testCode();
    function communication();
    function draw();
    function setTask();
    function can($param);
}