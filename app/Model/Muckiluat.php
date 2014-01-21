<?php
/**
 *
 */
class Muckiluat extends AppModel {
	public $hasMany = array(
		 'Kiluat' => array(
     'className'     => 'Kiluat',
     'foreignKey'    => 'muckiluat_id',
     'conditions'    => null,
     ),
		);
}
?>