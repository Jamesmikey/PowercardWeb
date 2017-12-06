<?php

class Feedback extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('feedback_model');	
	}

	public function index()
	{
		$data = [
			'title' => 'Feedback',
			'content' => 'dashboard/feedback/index',
			'feedbacks' => $this->feedback_model->get(),
		];
		
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/footer', $data);		
	}
}