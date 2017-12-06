<?php

class Login extends CI_Controller
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
        $data['title'] = 'Login';

    	$this->form_validation->set_rules('phone', 'Phone', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');

    	if ($this->form_validation->run() === FALSE)
    	{
        	$this->load->view('templates/header', $data);
        	$this->load->view('auth/login', $data);
        	$this->load->view('templates/footer', $data);
        }
        else
        {
        	$query = $this->user_model->login();

        	if ($query->num_rows() !== 1)
        	{
        		$this->session->set_flashdata('error_message', 'Invalid phone number or password');
        		redirect('login');
        	}

        	$user = $query->row_array();

            $this->session->set_userdata('id', $user['id']);
        	$this->session->set_userdata('first_name', $user['first_name']);
            $this->session->set_userdata('last_name', $user['last_name']);
        	$this->session->set_userdata('email', $user['email']);
        	$this->session->set_userdata('phone', $user['phone']);

            $this->session->set_flashdata('success_message', 'Welcome ' . $user['first_name'] . ' ' . $user['last_name']);

        	redirect('dashboard');
        }         
    }
}