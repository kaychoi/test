<?php

spl_autoload_register(function ($class)
{
    $class = str_replace('\\', '/', $class);
    //echo 'class:'.$class;
    require_once $class.'.php';
});