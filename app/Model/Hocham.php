<?php
/**
 *
 */
class Hocham extends AppModel {

	public $hasMany =array(
	 'Dienbienhocham' => array(
     'className'     => 'Dienbienhocham',
     'foreignKey'    => 'hocham_id',
     'conditions'    => null,
     ),
     );
}
?>