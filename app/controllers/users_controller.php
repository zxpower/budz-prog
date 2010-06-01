<?php
class UsersController extends AppController {

	var $name = 'Users';

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('*');
	}

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	
	function login() {
		//Auth Magic
	}

	function logout() {
		//Leave empty for now.
	}
}
?>