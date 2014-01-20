<?php

/**
* khoi_id
*
*/

class Donvi extends AppModel{
   public $hasMany = array(
     'Congviec' => array(
     'className'     => 'Congviec',
     'foreignKey'    => 'donvi_id',
     'conditions'    => null,
     ),
      'Phong' => array(
     'className'     => 'Phong',
     'foreignKey'    => 'donvi_id',
     'conditions'    => null,
     ),
     );
   public $belongsTo=array(
    'Khoi' => array(
           'className' => 'Khoi',
           'foreignKey'=>'khoi_id',
       'conditions'=>null,
        //'fields'=>null
       ),
    );
}