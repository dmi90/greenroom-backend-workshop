<?php

function dd($param)
{
    echo "<pre>";
        var_dump($param);
        echo "</pre>";
    exit;
}

function sum($num1, $num2)
{
    return $num1 + $num2;
}