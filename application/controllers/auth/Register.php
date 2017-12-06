<?php

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('user_model');		
	}

    public function index()
    {
        $data['title'] = 'Register';

    	$this->form_validation->set_rules('first_name', 'First name', 'required');
    	$this->form_validation->set_rules('last_name', 'Last name', 'required');
    	$this->form_validation->set_rules('phone', 'Phone', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');

    	if ($this->form_validation->run() === FALSE)
    	{
        	$this->load->view('templates/header', $data);
        	$this->load->view('auth/register', $data);
        	$this->load->view('templates/footer', $data);
        }
        else
        {
        	$this->user_model->create();

        	$this->session->set_flashdata('success_message', 'Registered Successful');

        	redirect('home');
        }

    }
}