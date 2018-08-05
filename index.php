<?php

/**
 * Copyright (c) Cole Design Stuidos, LLC (https://coleds.com)
 * 
 * Licensed under The MIT License
 *
 * @copyright     Copyright (c) Cole Design Studios, LLC. (https://coleds.com)
 * @link          https://facile.coleds.com/
 * @since         v0.0.1
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__).'/');
define('INC', ROOT.'inc/');

require_once(ROOT.'config'.DS.'config.php');
require_once(ROOT.'config'.DS.'functions.php');
require(ROOT.'/vendor/autoload.php');

use Facile\Router;

$url = parse_url(urldecode($_SERVER['REQUEST_URI']));
$router = new Router();
$router->dispatch($url);

d($url);
d($router);

?>