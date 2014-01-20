<?php
/**
 *
 */
class Chucdanh extends AppModel {

	public $hasMany = array(
     'Congtac' => array(
     'className'     => 'Congtac',
     'foreignKey'    => 'chucdanh_id',
     'conditions'    => null,
     )
     );
}
?>