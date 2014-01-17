<?php

class PhongsController extends AppController{
	public function index (){

	}
	public function detail ($id=null){
		$phong = $this->Phong->findById($id);
		$this->set('phong', $phong);
	}
}