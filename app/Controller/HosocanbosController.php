<?php


class HosocanbosController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {
        $data = $this->request->data;
        if (count($data) == 0) {
            $hosocanbos = $this->Hosocanbo->find('all');
            
        } else {
            $hosocanbos = $this->Hosocanbo->find('all', array(
                'conditions' => array('Hosocanbo.hoten LIKE' => '%' . $data['Hosocanbo']['Tên'] . '%',
                    'Hosocanbo.gioitinh = '=> $data['Hosocanbo']['Giới tính'] == 'Nam', )));
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
