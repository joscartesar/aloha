<?php

/**
 * @file
 * Contains \Drupal\aloha\Form\GreetingsSettingsForm.
 */

namespace Drupal\aloha\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure logging settings for this site.
 */
class GreetingsSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aloha_greetings_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['aloha.greetings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aloha.greetings');
    $form['greeting'] = array(
      '#type' => 'textfield',
      '#title' => t('Greeting'),
      '#default_value' => $config->get('greeting'),
      '#description' => t('Define your Stand Up "break the ice" war cry.'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (stripos($form_state->getValue('greeting'), 'aloha') === FALSE) {
      $form_state->setErrorByName('greeting', $this->t('Tell the truth, you are an Aloha type of person :P.'));
    }
  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('aloha.greetings')
      ->set('greeting', $form_state->getValue('greeting'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
