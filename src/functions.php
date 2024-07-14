<?php

const XPL_FUNCTIONS_DIRECTORY = __DIR__ . "/functions/";

foreach (scandir(XPL_FUNCTIONS_DIRECTORY) as $entry) 
{
    $file = XPL_FUNCTIONS_DIRECTORY.$entry;

    if (preg_match("/\.php/", $file) && is_file($file))
    {
        require_once $file;
    }
}