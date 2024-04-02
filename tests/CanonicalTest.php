<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

it('removes all additional params', function () {
    // Mock the config
    Config::shouldReceive('get')
        ->with('canonical.allowed_params')
        ->andReturn([]);

    // Mock the request with no query parameters
    Request::shouldReceive('param1')
        ->andReturn('value1');

    // Mock the URL
    URL::shouldReceive('current')
        ->andReturn('https://salamwaddah.com');

    // Assert the result
    expect(canonical())->toBe('https://salamwaddah.com');
});

//it('includes default parameters when present', function () {
//    // Mock the config
//    Config::shouldReceive('get')
//        ->with('canonical.allowed_params')
//        ->andReturn(['page']);
//
//    // Mock the request with query parameters
//    Request::shouldReceive('has')
//        ->with('page')
//        ->andReturn(true);
//
//    Request::shouldReceive('get')
//        ->with('page')
//        ->andReturn('2');
//
//    // Mock the URL
//    URL::shouldReceive('current')
//        ->andReturn('https://salamwaddah.com');
//
//    // Assert the result
//    expect(canonical())->toBe('https://salamwaddah.com?page=2');
//});
