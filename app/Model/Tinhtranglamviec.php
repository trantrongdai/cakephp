<?php 
class Tinhtranglamviec extends AppModel{
	public $hasMany = array(
     'Congtac' => array(
     'className'     => 'Congtac',
     'foreignKey'    => 'tinhtranglamviec_id',
     'conditions'    => null,
     )
     );
}	
?>