<?php

/**
 * @file IndexGroup.php
 * @brief Group of Updates routes.
 * @details
 * @author Filippo F. Fadda
 */


//! Ciripottolo routes namespace.
namespace Ciripottolo\Route;


use Phalcon\Mvc\Router\Group;
use Phalcon\DI;


/**
 * @brief Group of index routes.
 * @nosubgrouping
 */
class IndexGroup extends Group {


  public function initialize() {
    // Sets the default controller for the following routes.
    $this->setPaths(
      [
        'namespace' => 'Ciripottolo\Controller',
        'controller' => 'index'
      ]);

    $this->setHostName(DI::getDefault()['config']['application']['domainName']);

    $this->addGet('/', ['action' => 'index']);

    $this->addGet('/tour/', ['action' => 'tour']);
  }

}