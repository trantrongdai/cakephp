<?php

/**
 *
 */
class PostsController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);

        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add() {
        if ($this->request->is('post')) {// chi thuc hien voi phuong thuc POST
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('your post has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException("Error Processing Request", 1);
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('update successfully'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('unable to update'));
        }
//chu y phai co cau lenh duoi thi moi cap nhat duoc, neu khong se thanh tao cai moi
//cau lenh duoi cung co tac dung lay du lieu dang ton tai trong csdl
        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id = null) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowException();
        }

        if ($this->Post->delete($id)) {
            $this->Session->setFlash(__('The post with id : %s has been deleted', h($id)));
            return $this->redirect(array('action' => index));
        }
    }

}

?>