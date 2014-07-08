<?php

/**
 * @file router.php
 * @brief Setting up the router.
 * @details
 * @author Filippo F. Fadda
 */


use Phalcon\Mvc\Router;

use Ciripottolo\Route;


// Creates a router instance and return it.
$di->setShared('router',
  function () {
    $router = new Router();

    //$router->setDefaultController("index");
    //$router->setDefaultAction("index");

    $router->mount(new Route\IndexGroup());
    $router->mount(new Route\BlogGroup());
    $router->mount(new Route\AjaxGroup());

    return $router;
  }
);