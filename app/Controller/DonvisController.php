<?php

class DonvisController extends AppController {

    public $helpers = array('Html');

    public function index() {
        $donvis = $this->Donvi->find('all');
        $this->set('donvis', $donvis);
    }

    public function detail($id = null) {
        $donvi = $this->Donvi->findById($id);
        $this->set('donvi', $donvi);
    }

    public function phongtructhuocs($id = null) {
        $donvi = $this->Donvi->findById($id);
        $this->set('donvi', $donvi);
    }

}
