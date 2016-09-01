<?php

class Home extends Controller {

	public function index($name = '') {
		$user = $this->model('User');
		$user->name = $name;

		$this->view('Home/Index', ['name' => $user->name]);
	}

	public function test() {
		echo "Now we're testing";
	}

	public function error() {
		echo "Ooops! Something went wrong!";
	}

}