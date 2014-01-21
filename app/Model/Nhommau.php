<?php
/**
 *
 */
class Nhommau extends AppModel {

	public $hasMany =array(
		 'Hosocanbo' => array(
     'className'     => 'Hosocanbo',
     'foreignKey'    => 'nhommau_id',
     'conditions'    => null,
     ),
		);
}
?>