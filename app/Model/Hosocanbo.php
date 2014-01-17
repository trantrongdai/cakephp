<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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