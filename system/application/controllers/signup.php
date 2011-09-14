<?php

class Signup extends Controller {
	
	public function __construct() {
		parent::Controller();
		
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}
	
	public function index() {
		$this->load->view('signup_form');
	}
	
	public function submit() {
		
		if ($this->_submit_validate() === FALSE) {
			$this->index();
			return;
		}

		$u = new User();
		$u->username = $this->input->post('username');
		$u->password = $this->input->post('password');
		$u->email = $this->input->post('email');
		$u->save();
		
		$this->load->view('login_form');
	
	}
	
	private function _submit_validate() {
		
		// validation rules
		$this->form_validation->set_rules('username', 'Username', 
			'trim|required|alpha_numeric|min_length[6]|max_length[12]|unique[User.username]');
		
		$this->form_validation->set_rules('password', 'Password',
			'trim|required|min_length[6]|max_length[12]');
		
		$this->form_validation->set_rules('passconf', 'Confirm Password',
			'trim|required|matches[password]');
		
		$this->form_validation->set_rules('email', 'E-mail',
			'trim|required|valid_email|unique[User.email]');
		
		return $this->form_validation->run();
		
	}
	
}
