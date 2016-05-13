<?php

namespace Drupal\cove_api\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\cove_api\CoveRequest;

/**
 * Class CoveTestingForm.
 *
 * @package Drupal\cove_api\Form
 */
class CoveTestingForm extends FormBase {


  /**
   * Drupal\cove_api\CoveRequest definition.
   *
   * @var Drupal\cove_api\CoveRequest
   */
  protected $cove_api_request;
  public function __construct(
    CoveRequest $cove_api_request
  ) {
    $this->cove_api_request = $cove_api_request;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cove_api.request')
    );
  }


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'cove_testing_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }

}
