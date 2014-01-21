<?php
/**
 * ngach_id
 */
class Hesoluong extends AppModel {

	public $hasMany=array(

	'Dienbienluong' => array(
     'className'     => 'Dienbienluong',
     'foreignKey'    => 'hesoluong_id',
     'conditions'    => null,
     ),
		);

  public $belongsTo=array(
	 'Ngach' => array(
           'className' => 'Ngach',
           'foreignKey'=>'ngach_id',
       'conditions'=>null,
        //'fields'=>null
       ),
   );
}
?>