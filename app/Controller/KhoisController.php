<?php

class KhoisController extends AppController {

    public function index() {
        $khois = $this->Khois->find('all');
        $this->set('khois', $khois);
    }

    public function donvitructhuocs($id = null) {
        $khoi = $this->Khois->findById($id);
        $this->set('khoi', $khoi);
    }

}
