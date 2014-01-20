<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends AppModel{
    public $hasOne = 'Hosocanbo';
    public $hasMany=array(
    	 'Nhatkyhethong' => array(
     'className'     => 'Nhatkyhethong',
     'foreignKey'    => 'user_id',
     'conditions'    => null,
     ),
    	);
}