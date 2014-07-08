<?php

/**
 * @file BaseController.php
 * @brief Ancestor of every defined controller.
 * @details Here you can find the common functions of each controller.
 * @author Filippo F. Fadda
 */


//! Ciripottolo controllers namespace.
namespace Ciripottolo\Controller;


use Phalcon\Mvc\Controller;


/**
 * @brief The base controller, a subclass of Phalcon controller.
 * @nosubgrouping
 */
abstract class BaseController extends Controller {
  protected $monolog;

  protected $domainName;
  protected $serverName;
  protected $controllerName;
  protected $actionName;


  /**
   * @brief Initializes the controller.
   */
  public function initialize() {
    $this->monolog = $this->di['monolog'];

    // It is just the primary domain, for example: `programmazione.it`.
    $this->domainName = $this->di['config']['application']['domainName'];

    // Includes the subdomain if any, for example: `blog.programmazione.it`.
    $this->serverName = $_SERVER['SERVER_NAME'];
  }


  /**
   * @brief This method is executed before the initialize. In my opinion it's a bug.
   * @details Cannot log inside this method using the monolog instance.
   */
  public function beforeExecuteRoute() {
  }


  public function afterExecuteRoute() {
    $this->view->setVar('year', date('Y'));

    $this->view->setVar('domainName', $this->domainName);
    $this->view->setVar('serverName', $this->serverName);
    $this->view->setVar('controllerName', $this->dispatcher->getControllerName());
    $this->view->setVar('actionName', $this->dispatcher->getActionName());

  }


  public function notFoundAction() {
    $this->response->setHeader(404 , 'Not Found');
    $this->view->pick('404/404');
  }

}