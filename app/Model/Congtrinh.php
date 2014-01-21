<?php
/**
 * hosocanbo_id
 */
class Congtrinh extends AppModel {

	public $belongsTo = array(
	 'Hosocanbo' => array(
           'className' => 'Hosocanbo',
           'foreignKey'=>'hosocanbo_id',
       	   'conditions'=>null,
        //'fields'=>null
       ),
	 );
}

?>