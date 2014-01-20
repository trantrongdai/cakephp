<?php
// donvi....
class Phong extends AppModel{
	public $hasMany = array(
     'Congtac' => array(
     'className'     => 'Congtac',
     'foreignKey'    => 'phong_id',
     'conditions'    => null,
     )
     );

    public $belongsTo=array(
	 'Donvi' => array(
           'className' => 'Donvi',
           'foreignKey'=>'donvi_id',
       'conditions'=>null,
        //'fields'=>null
       ),
	);
}