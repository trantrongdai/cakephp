<?php
/**
 *  hocvi_id
 *  hosocanbo_id
 */
class Dienbienhocvi extends AppModel {
	 
  public $belongsTo=array(
   'Hocvi' => array(
           'className' => 'Hocvi',
           'foreignKey'=>'hocvi_id',
       'conditions'=>null,
        //'fields'=>null
       ),
	  'Hosocanbo' => array(
           'className' => 'Hosocanbo',
           'foreignKey'=>'hosocanbo_id',
       'conditions'=>null,
        //'fields'=>null
       ),
    );
}
?>