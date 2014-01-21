<?php
/**
 *
 */
class Dienuutien extends AppModel {

	public $hasMany=array(
	 'Hosocanbo' => array(
     'className'     => 'Hosocanbo',
     'foreignKey'    => 'dienuutien_id',
     'conditions'    => null,
     ),
	);
}
?>