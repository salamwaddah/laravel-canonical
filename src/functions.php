<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

if (!function_exists('canonical')) {
    function canonical(): string
    {
        $allowed = Config::get('canonical.allowed_params');
        $build = [];
        $query = '';

        foreach ($allowed as $param) {
            if (Request::has($param)) {
                $build[$param] = Request::get('page');
            }
        }

        if (count($build)) {
            $query = '?' . http_build_query($build);
        }

        return URL::current() . $query;
    }
}
