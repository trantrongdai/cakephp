<?php
/**
 * hosocanbo
 */
class Khenthuong extends AppModel {
	public $belongsTo = array(
	 'Hosocanbo' => array(
     'className'     => 'Hosocanbo',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
	);
}
?>