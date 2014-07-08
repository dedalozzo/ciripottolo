<?php

/**
 * @file IndexController.php
 * @brief This file contains the IndexController class.
 * @details
 * @author Filippo F. Fadda
 */


namespace Ciripottolo\Controller;


use Phalcon\Mvc\View;


/**
 * @brief Controller of Index actions.
 * @nosubgrouping
 */
class IndexController extends BaseController {


  /**
   * @brief Displays the most popular updates for the provided period.
   */
  public function indexAction() {
    $this->view->disableLevel(View::LEVEL_LAYOUT);
  }

}