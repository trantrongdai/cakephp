<?php
/**
 *
 */
class Thanhphanxuatthan extends AppModel {

	public $hasMany = array(
		 'Hosocanbo' => array(
     'className'     => 'Hosocanbo',
     'foreignKey'    => 'thanhphanxuatthan_id',
     'conditions'    => null,
     ),
		);
}
?>