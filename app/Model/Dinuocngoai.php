<?php
/**
 * hosocanbo_id
 */
class Dinuocngoai extends AppModel {


	public $belongsTo =array(
	 'Hosocanbo' => array(
          'className' => 'Hosocanbo',
           'foreignKey'=>'hosocanbo_id',
       'conditions'=>null,
        //'fields'=>null
       ),
	 );
}
?>