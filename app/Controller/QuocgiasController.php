<?php


/**
* 
*/
class QuocgiasController extends AppController
{
	public $helpers=array('Html','Form');

	function index()
	{
			$this->set('quocgias',$this->Quocgia->find('all'));
	}
}
?>