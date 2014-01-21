<?php
/**
 *  hosocanbo_id
 *  hocham_id
 */
class Dienbienhocham extends AppModel {
	 
  public $belongsTo = array(
   'Hosocanbo' => array(
           'className' => 'Hosocanbo',
           'foreignKey'=>'hosocanbo_id',
            'conditions'=>null,
        //'fields'=>null
       ),
	  'Hocham' => array(
           'className' => 'Hocham',
           'foreignKey'=>'hocham_id',
           'conditions'=>null,
        //'fields'=>null
       ),
    );
}
?>