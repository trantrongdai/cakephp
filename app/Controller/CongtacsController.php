<?php

class CongtacsController extends AppController{
	public function index(){
        $congtacs = $this->Congtac->find('all');
        $this->set('congtacs', $lanhdaos);
    }
    public function lanhdaos(){
        $lanhdaos = $this->Congtac->find('all');
        $this->set('lanhdaos', $lanhdaos);
    }
}