<?php

/**
 * @file
 * Contains \Drupal\aloha\Controller\AlohaController.
 */

namespace Drupal\aloha\Controller;

use Drupal\Core\Controller\ControllerBase;

class AlohaController extends ControllerBase
{
  public function content() {
    $greetings = \Drupal::config('aloha.greetings')->get('greeting');
    return array(
      '#markup' => $greetings
    );
  }
}
