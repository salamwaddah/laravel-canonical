<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

if (!function_exists('canonical')) {
    function canonical(): string
    {
        $page = null;

        if (Request::has('page')) {
            $page = '?page=' . Request::get('page');
        }

        return URL::current() . $page;
    }
}
