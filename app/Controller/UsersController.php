<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsersController extends AppController {

    public function index() {
        $users = $this->User->find('all');
        $this->set('users', $users);
    }

}
