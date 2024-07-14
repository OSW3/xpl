<?php

if (!function_exists('redirect'))
{
    /**
     * redirect
     * --
     * Set Headers location and exit the script.
     * 
     * redirect(string $destination[, bool $exit = true])
     * 
     * @version 1.0.0
     * @since 1.0.0
     * 
     * @param string $destination redirect url
     * @param bool $exit Default True, Exit or not after redirect
     */
    function redirect(string $destination, bool $exit=true): void
    {
        header("location: ".$destination);
        if ($exit) exit;
    }
}