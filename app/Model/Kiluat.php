<?php
/**
 * hosocanbo
 * muckiluat
 */
class Kiluat extends AppModel {


    public $belongsTo =array(
	 'Hosocanbo' => array(
           'className' => 'Hosocanbo',
           'foreignKey'=>'hosocanbo_id',
       'conditions'=>null,
        //'fields'=>null
       ),
	  'Muckiluat' => array(
           'className' => 'Muckiluat',
           'foreignKey'=>'muckiluat_id',
       'conditions'=>null,
        //'fields'=>null
       ),
    );
}
?>