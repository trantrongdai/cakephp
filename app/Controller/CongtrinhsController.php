<?php
class CongtrinhsController extends AppController {

public function index(){
	$congtrinhs=$this->Congtrinh->find('all');
	$this->set('congtrinhs',$congtrinhs);
}
public function detail(){
	if (!$id) {
			throw new NotFoundException(__('Invalid author'));
		}

		$congtrinh = $this -> Author -> findById($id);
		if (!$author) {
			throw new NotFoundException(__('Invalid author'));
		}
		$this -> set('congtrinh', $congtrinh);
}
}