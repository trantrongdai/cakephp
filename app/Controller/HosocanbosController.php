<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HosocanbosController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {
        $data = $this->request->data;
        if (count($data) == 0) {
            $hosocanbos = $this->Hosocanbo->find('all');
            
        } else {
            $hosocanbos = $this->Hosocanbo->find('all', array(
                'conditions' => array('Hosocanbo.hoten LIKE' => '%' . $data['Hosocanbo']['Tên'] . '%')));
        }
        $this->set('hosocanbos', $hosocanbos);

        $this->set('data', $data);
    }

    public function detail($id = null) {
        if (!$id) {
            throw new NotFoundException(__('không tìm thấy hồ sơ cán bộ.'));
        }

        $hosocanbo = $this->Hosocanbo->findById($id);
        if (!$hosocanbo) {
            throw new NotFoundException(__('không tìm thấy hồ sơ cán bộ.'));
        }

        $this->set('hosocanbo', $hosocanbo);
    }

}
