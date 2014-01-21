<?php
/**
 *
 */
class Hocvi extends AppModel {

	public $hasMany=array(
	 'Dienbienhocvi' => array(
     'className'     => 'Dienbienhocvi',
     'foreignKey'    => 'hocvi_id',
     'conditions'    => null,
     ),
	  'Hosocanbo' => array(
     'className'     => 'Hosocanbo',
     'foreignKey'    => 'hocvi_id',
     'conditions'    => null,
     ),
	);
}
?>
