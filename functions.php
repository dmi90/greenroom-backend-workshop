<?php

/**
 * Dump & Die
 * @param $param
 */
function dd($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
    exit;
}