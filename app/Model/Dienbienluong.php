<?php
/**
 *	hesoluong_id
*	hosocanbo_id
*	
 */
class Dienbienluong extends AppModel {

  public $belongsTo=array(
	 'Hesoluong' => array(
           'className' => 'Hesoluong',
           'foreignKey'=>'hesoluong_id',
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