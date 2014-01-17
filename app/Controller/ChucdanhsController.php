<?php
/**
 *
 */
class ChucdanhsController extends AppController {

	public function index() {
		$chucdanhs = $this->Chucdanh->find('all');
		$this->set('chucdanhs', $chucdanhs);
	}

}
?>