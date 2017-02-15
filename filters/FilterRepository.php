<?php

require_once 'VisitorFilter.php';

final class FilterRepository
{
    public static function generate($type, $affected)
    {
        if($affected == 'visitor'){
            return new VisitorFilter($type);
        }
    }
}