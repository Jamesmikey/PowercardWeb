<?php

class SiteSettings extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('SiteSettings_model');	
	}

	public function index()
	{
		$site = $this->SiteSettings_model->get();

		$data = [
			'title' => 'Settings',
			'content' => 'dashboard/settings/index',
			'site' => $site,
		];

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('tag_line', 'Tag line', 'required');
		$this->form_validation->set_rules('about', 'About', 'required');

		if ($this->form_validation->run() === FALSE)
		{
	    	$this->load->view('templates/header', $data);
	    	$this->load->view('templates/footer', $data);
		}
		else
		{
			$this->SiteSettings_model->update($this->input->post('id'));

			$this->session->set_flashdata('success_message', 'Updated Successful');

			redirect(base_url('index.php/dashboard/settings'));
		}	
	}
}