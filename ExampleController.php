<?php
namespace Drupal\hello_world\Controller;
class ExampleController {
  public function myPage($user) {
    $users=array('1'=>
        array('id'=>1,'username'=>'kritika'),
        '2'=>array('id'=>2,'username'=>'kritika lamba'),
        '3'=>array('id'=>3,'username'=>'ashwin sharma')
        );

        if(in_array($user, $users[$user]))
    {
        return array(
        '#theme'=>'user_list',
        '#users'=>$users[$user],
        '#title'=>$users[$user]['username']
        );
    }
  }
}
?>
<?php
