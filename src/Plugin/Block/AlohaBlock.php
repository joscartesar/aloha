<?php

namespace Drupal\aloha\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "aloha_block",
 *   admin_label = @Translation("Aloha block"),
 * )
 */
class AlohaBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $greetings = \Drupal::config('aloha.greetings')->get('greeting');

    return array(
      '#markup' => $greetings . ' ' . $test
    );
  }
}
