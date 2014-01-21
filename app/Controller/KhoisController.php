<?php

class KhoisController extends AppController {

    public function index() {
    	//$this->Khoi->recursive = 1;
        $khois = $this->Khois->find('all');
        $this->set('khois', $khois);
    }

    public function detail($id = null) {
    	//$this->Khoi->recursive = 2;
        $khoi = $this->Khois->findById($id);
        $this->set('khoi', $khoi);
    }
   
}
