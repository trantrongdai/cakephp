<?php
/**
 *
 */
class Tinhtranghonnhan extends AppModel {

	public $hasMany=array(
		 'Hosocanbo' => array(
     'className'     => 'Hosocanbo',
     'foreignKey'    => 'tinhtranghonnhan_id',
     'conditions'    => null,
     ),
		  '' => array(
     'className'     => '',
     'foreignKey'    => '',
     'conditions'    => null,
     ),
	);
}
?>