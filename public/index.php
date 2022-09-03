<?php

/**
 * Front controller
 */

/**
 * Routing
 */
require '../Core/Router.php';

$router = new Router();

echo get_class($router);
