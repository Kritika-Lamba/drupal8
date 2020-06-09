<?php
namespace Drupal\hello_world\Controller;

class helloworldController
{
public function content($user)
    {
$users=array('1'=>
array('id'=>1,'username'=>'kritika'),
'2'=>array('id'=>2,'username'=>'kritika 2'),
'3'=>array('id'=>3,'username'=>'kritika 3')
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

