<?php
class Schedule extends Controller {
	public function __construct() {
		parent::Controller();
		$this->load->helper(array('form','url'));
		$this->load->model('Schedule_model','',TRUE);
	}

	public function index() {
		
		$this->load->view('set_up_schedule');
	}
	

	public function getInstitute(){
           $data['institutes'] = $this->schedule_model->getInstitutes();
           $this->load->view('set_up_schedule',$data);
	}

	public function displayInstitute(){


	}
}
