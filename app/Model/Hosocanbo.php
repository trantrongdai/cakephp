<?php

/**
* dienuutien
* hocvi
* nhommau
* quocgia
* thanhphanxuatthan
* tinhtranghonnhan
*
*
*
*/

class Hosocanbo extends AppModel{
   public $belongsTo = array(
       'Dienuutien' => array(
           'className' => 'Dienuutien',
           'foreignKey' =>'dienuutien_id',
           'conditions' =>null,
       ),
       'Quocgia' => array(
           'className' => 'Quocgia',
           'foreignKey' => 'quocgia_id',
           'conditions' =>null,
       ),
        'Hocvi' => array(
           'className' => 'Hocvi',
           'foreignKey'=>'hocvi_id',
           'conditions'=>null,
        //'fields'=>null
       ),
        'Nhommau' => array(
         'className'     => 'Nhommau',
          'foreignKey'    => 'nhommau_id',
         'conditions'    => null,
     ),
         'Thanhphanxuatthan' => array(
     'className'     => 'Thanhphanxuatthan',
     'foreignKey'    => 'thanhphanxuatthan_id',
     'conditions'    => null,
     ),
          'Tinhtranghonnhan' => array(
     'className'     => 'Tinhtranghonnhan',
     'foreignKey'    => 'tinhtranghonnhan_id',
     'conditions'    => null,
     ),     
   );
   public $hasMany = array(
     'Congtac' => array(
     'className'     => 'Congtac',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
     'Contrinh' => array(
     'className'     => 'Congtrinh',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
      'Dienbienhocham' => array(
     'className'     => 'Dienbienhocham',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
       'Dienbienhocvi' => array(
     'className'     => 'Dienbienhocvi',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
        'Dienbienluong' => array(
     'className'     => 'Dienbienluong',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
         'Dinuocngoai' => array(
     'className'     => 'Dinuocngoai',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
          'Huongnghiencuu' => array(
     'className'     => 'Huongnghiencuu',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
           'Khenthuong' => array(
     'className'     => 'Khenthuong',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
            'Kiluat' => array(
     'className'     => 'Kiluat',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
            'Nhatkyhethong' => array(
     'className'     => 'Nhatkyhethong',
     'foreignKey'    => 'hosocanbo_id',
     'conditions'    => null,
     ),
     );
}