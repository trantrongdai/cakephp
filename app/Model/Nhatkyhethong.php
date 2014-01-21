<?php
/**
 * hosocanbo ....nguoidung
 */
class Nhatkyhethong extends AppModel {

	public $belongsTo =array(
	 'Hosocanbo' => array(
         'className' => 'Hosocanbo',
           'foreignKey'=>'hosocanbo_id',
       'conditions'=>null,
        //'fields'=>null
       ),
	 'User' => array(
     'className'     => 'User',
     'foreignKey'    => 'user_id',
     'conditions'    => null,
     ),
	 );
}
?>