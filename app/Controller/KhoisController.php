<?php

class KhoisController extends AppController {

    public function index() {
    	$this->Khoi->recursive = 2;
        $khois = $this->Khois->find('all');
        $this->set('khois', $khois);
    }

    public function view($id = null) {
        $khoi = $this->Khois->findById($id);
        $this->set('khoi', $khoi);
    }
   
}
