<?php
/**
 * 
 */
class Chucvudoanthe extends AppModel {

	public $hasMany = array(
     'Congtac' => array(
     'className'     => 'Congtac',
     'foreignKey'    => 'chucvudoanthe_id',
     'conditions'    => null,
     );
}
?>