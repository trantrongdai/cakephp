/**
co quan he voi cac bang

hosocanbo
donvi
phong
tinhtranglamviec
chucvudoanthe
chucdanh

*/


<?php

class Congtac extends AppModel{
    public $belongsTo  = array(
    	 'Chucdanh' => array(
           'className' => 'Chucdanh',
           'foreignKey'=>'chucdanh_id',
		   'conditions'=>null,
		    //'fields'=>null
       ),
    	  'Hosocanbo' => array(
           'className' => 'Hosocanbo',
           'foreignKey'=>'hosocanbo_id',
		   'conditions'=>null,
		    //'fields'=>null
       ),
    	   'Donvi' => array(
           'className' => 'Donvi',
           'foreignKey'=>'donvi_id',
		   'conditions'=>null,
		    //'fields'=>null
       ),
    	    'Phong' => array(
           'className' => 'Phong',
           'foreignKey'=>'phong_id',
		   'conditions'=>null,
		    //'fields'=>null
       ),
    	     'Tinhtranglamviec' => array(
           'className' => 'Tinhtranglamviec',
           'foreignKey'=>'tinhtranglamviec_id',
		   'conditions'=>null,
		    //'fields'=>null
       ),

        );
}