<?php

class CongtacsController extends AppController{
    public function lanhdaos(){
        $lanhdaos = $this->Congtac->find('all');
        $this->set('lanhdaos', $lanhdaos);
    }
}