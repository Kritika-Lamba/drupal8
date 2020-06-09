<?php
namespace Drupal\hello_world\Controller;
class ExampleController {
  public function myPage() {
    return array(
      '#theme'=>'hello_list',
      '#abc'=>'Hello World',
      '#title'=>'Hello World'
      );
  }
}
?>
