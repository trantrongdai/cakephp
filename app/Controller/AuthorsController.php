<?php
/**
 *
 */
class AuthorsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		$authors = $this -> Author -> find('all');
		$this -> set('authors', $authors);
	}

	public function detail($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid author'));
		}

		$author = $this -> Author -> findById($id);
		if (!$author) {
			throw new NotFoundException(__('Invalid author'));
		}
		$this -> set('author', $author);
	}

	public function add() {
		if ($this -> request -> is('post')) {
			$this -> Author -> create();
			if ($this -> Author -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('new Author is saved successfully !'));
				return $this -> redirect(array('action' => 'index'));
			}
			$this -> Session -> setFlash(__('there a error'));
		}
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundExceptio(__('invalid author'));
		}
		$author = $this -> Author -> findById($id);

		if (!$author) {
			throw new NotFoundException(__('invalid author'));
		}

		if ($this -> request -> is(array('post', 'put'))) {
			$this -> Author -> id = $id;
			if ($this -> Author -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('edit successfully'));
				return $this -> redirect(array('action' => 'index'));
			}
			$this -> Session -> setFlash(__('unable update'));
		}

		if (!$this -> request -> data) {
			$this -> request -> data = $author;
		}
	}

	public function delete($id = null) {
		if ($this -> request -> is('get')) {
			throw new MethodNotAllowException(__("can't delete, not allow"));
		}
		if ($this -> Author -> delete($id)) {
			$this -> Session -> setFlash(__('the post id %s has been deleted', h($id)));
			return $this -> redirect(array('action' => 'index'));
		}

	}

}
?>
