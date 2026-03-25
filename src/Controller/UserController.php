<?php

namespace Drupal\custom_display_name\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\user\Controller\UserController as UserControllerBase;
use Drupal\user\UserInterface;

/**
 * Controller routines for user routes.
 */
class UserController extends UserControllerBase {

  /**
   * {@inheritdoc}
   * * Fixed for PHP 8.4: Added explicit nullability '?' to the $user parameter.
   */
  public function userTitle(?UserInterface $user = NULL) {
    return $user ? ['#markup' => $user->getDisplayName(), '#allowed_tags' => Xss::getHtmlTagList()] : '';
  }

}