<?php
class Schedule extends Controller {
	public function __construct() {
		parent::Controller();
		$this->load->helper('form');

		$this->load->model('Schedule_model');
	}

	public function index() {
		
		$this->load->view('set_up_schedule');
	}
	

	public function getCountry(){

	}

	public function displayInstitute(){


	}
}
