<?php

/**
 * @file BlogGroup.php
 * @brief Group of Blog routes.
 * @details
 * @author Filippo F. Fadda
 */


namespace Ciripottolo\Route;


use Phalcon\Mvc\Router\Group;
use Phalcon\DI;


/**
 * @brief Group of blog routes.
 * @nosubgrouping
 */
class BlogGroup extends Group {


  public function initialize() {
    // Sets the default controller for the following routes.
    $this->setPaths(
      [
        'namespace' => 'Ciripottolo\Controller',
        'controller' => 'blog'
      ]);

    $this->setHostName('blog.'.DI::getDefault()['config']['application']['domainName']);

    $this->addGet('/', ['action' => 'newest']);
  }

}