<?php
/**
 *
 */
class Ngach extends AppModel {

	public $hasMany=array(
 		'Hesoluong' => array(
     'className'     => 'Hesoluong',
     'foreignKey'    => 'ngach_id',
     'conditions'    => null,
     ),
		);
}
?>