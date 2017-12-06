<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('SliderImage_model');
		$this->load->model('service_model');
		$this->load->model('user_model');
		$this->load->model('feedback_model');

		$sliderImagesCount = count($this->SliderImage_model->get());
		$servicesCount = count($this->service_model->get());
		$usersCount = count($this->user_model->get());
		$feedbackCount = count($this->feedback_model->get());

		$data = [
			'title' => 'Dashboard',
			'content' => 'dashboard/index',
			'sliderImagesCount' => $sliderImagesCount,
			'servicesCount' => $servicesCount,
			'usersCount' => $usersCount,
			'feedbackCount' => $feedbackCount
		];
		
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/footer', $data);		
	}
}