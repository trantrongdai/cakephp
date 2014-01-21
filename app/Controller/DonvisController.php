<?php

class DonvisController extends AppController {

    public $helpers = array('Html');

    $this->Donvi->recursive = 2;
    public function index() {
        $donvis = $this->Donvi->find('all');
        $this->set('donvis', $donvis);
    }

    public function detail($id = null) {
        $this->Donvi->recursive = 2;
        $donvi = $this->Donvi->findById($id);
        $this->set('donvi', $donvi);
    }

    public function phongtructhuocs($id = null) {
        $this->Donvi->recursive = 2;
        $donvi = $this->Donvi->findById($id);
        $this->set('donvi', $donvi);
    }

}
