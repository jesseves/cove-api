<?php
/**
* @file
* Contains \Drupal\cove_api\Controller\TestController.
*/
namespace Drupal\cove_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\cove_api\CoveRequest;

class TestController extends ControllerBase
{
  public function testPage()
  {

    $output = 'testing 123';
    $output .= 'Making request...';

    $args = [
      'filter_tp_media_object_id' => 2365138191,
      'w' => 640,
      'h' => 480,
      'chapterbar' => FALSE,
      'autoplay' => FALSE,
    ];

    $request = new CoveRequest();
    $response = $request->request('videos', $args);
    //$response = $request->request('programs', array('filter_producer__name' => 'WETA'));
    //$response = $request->request('programs');

    //$output .= 'Response...';

    return [
      '#markup' => '<pre>' . print_r($response, 1) . '</pre>',
    ];
  }

  /*public function cove_api_test() {

    $output = 'Cove API Test Function';

    $object_id = "2365138191";
    $width = 640;
    $height = 480;
    $chapterbar = FALSE;
    $autoplay = FALSE;





    $args = array();
    $args['filter_tp_media_object_id'] = $object_id;
    if (isset($width)) {
      $args['w'] = $width;
    }
    if (isset($height)) {
      $args['h'] = $height;
    }
    if (isset($chapterbar)) {
      $args['chapterbar'] = $chapterbar;
    }
    if (isset($autoplay)) {
      $args['autoplay'] = $autoplay;
    }

    // Request the video object from PBS.
    //$response = cove_api_request('videos', $args, 0);

    $output .= 'Making Request...';
    //$request = new CoveRequest();
    //$response = $request->make_request('http://api.pbs.org/cove/v1/programs/?filter_producer__name=PBS');

    return $output;

  }*/

}