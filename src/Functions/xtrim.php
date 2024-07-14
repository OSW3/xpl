<?php

if (!function_exists('xtrim'))
{
    /**
     * Split a string in trimed segments
     * 
     * xtrim(string $delimiter, string $string, int $limit = PHP_INT_MAX)
     * 
     * @version 1.0.0
     * @since 1.0.0
     * 
     * @param string $delimiter String separator
     * @param string $string Initial string
     * @param int $limit
     * 
     * @return array trimed segments of the initial string
     */
    function xtrim(string $delimiter, string $string, int $limit = PHP_INT_MAX): array
    {
        $array = explode($delimiter, $string, $limit);
    
        foreach ($array as $key => $value) 
        {
            $array[$key] = trim($value);
        }
    
        return $array;
    }
}