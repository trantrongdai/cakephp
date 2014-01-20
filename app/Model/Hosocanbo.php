<?php

/**
* dienuutien
* hocvi
* nhommau
* quoctich
* thanhphanxuatthan
* tinhtranghonnhan
*
*
*
*/

class Hosocanbo extends AppModel{
   public $belongsTo = array(
       'User' => array(
           'className' => 'User',
           'foreignKey' =>'user_id'
       ),
       'Quocgia' => array(
           'className' => 'Quocgia',
           'foreignKey' => 'quoctich_id'
       )
       
   );
   public $hasMany = 'Congtac';
}