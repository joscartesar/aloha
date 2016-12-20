<?php

/**
 * @file
 * Contains \Drupal\aloha\Controller\AlohaController.
 */

namespace Drupal\aloha\Controller;

use Drupal\Core\Controller\ControllerBase;

class AlohaController extends ControllerBase {
  public function content() {
    return array(
      '#markup' => t('Aloha!')
    );
  }
}
