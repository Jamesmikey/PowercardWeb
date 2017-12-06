<?php

class ProfileSettings extends CI_Controller
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
		$id = $this->session->userdata('id');

		$user = $this->user_model->find($id);;

		$data = [
			'title' => 'Profile Settings',
			'content' => 'dashboard/settings/profile',
			'user' => $user,
		];

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone number', 'required');

		if ($this->form_validation->run() === FALSE)
		{
	    	$this->load->view('templates/header', $data);
	    	$this->load->view('templates/footer', $data);
		}
		else
		{
			$id = $this->session->userdata('id');

			$this->user_model->update($id);

			$this->session->set_flashdata('success_message', 'Updated Successful');

			redirect(base_url('index.php/dashboard/settings/profile'));
		}	
	}

	public function changePassword()
	{

		$data = [
			'title' => 'Change Password',
			'content' => 'dashboard/settings/password',
		];

		$this->form_validation->set_rules('old_password', 'Old Password', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'required');

		if ($this->form_validation->run() === FALSE)
		{
	    	$this->load->view('templates/header', $data);
	    	$this->load->view('templates/footer', $data);
		}
		else
		{
			if ($this->input->post('password') !== $this->input->post('password_confirmation'))
			{
				$this->session->set_flashdata('error_message', 'Password confirmation does not match.');
				redirect('dashboard/settings/password');
			}
			else
			{
				if (null === $this->user_model->checkPassword($id))
				{
					$this->session->set_flashdata('error_message', 'Incorrect old password.');
					redirect(base_url('dashboard/settings/password'));		
				}

				$id = $this->session->userdata('id');

				$user = $this->user_model->find($id);

				$this->user_model->changePassword($user['id']);

				$this->session->set_flashdata('success_message', 'Changed Successful');

				redirect(base_url('index.php/dashboard/settings/password'));
			}
		}		
	}
}