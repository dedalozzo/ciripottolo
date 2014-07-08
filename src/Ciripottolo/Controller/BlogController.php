<?php

/**
 * @file BlogController.php
 * @brief Controller of Blog actions.
 * @details
 * @author Filippo F. Fadda
 */


namespace Ciripottolo\Controller;


use Phalcon\Mvc\View;


/**
 * @brief Controller of Blog actions.
 * @nosubgrouping
 * @bug
 */
class BlogController extends BaseController {


  /**
   * @brief Displays the newest blog entries.
   */
  public function newestAction() {
  }


  /**
   * @brief Displays the most popular blog entries.
   */
  public function popularAction($period = "settimana") {
  }

}