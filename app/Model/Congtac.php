/**
co quan he voi cac bang

hosocanbo
donvi
phong
tinhtranglamviec
chucvudoanthe

*/


<?php

class Congtac extends AppModel{
    public $belongsTo  = array(
    	 'Chucdanh' => array(
           'className' => 'Chucdanh',
           'foreignKey' =>'chucdanh_id'
       ),
        );
}