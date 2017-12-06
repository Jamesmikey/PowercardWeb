<?php

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SiteSettings_model');
        $this->load->model('user_model');
        $this->load->model('SliderImage_model');
        $this->load->model('service_model');
    }    

    public function home()
    {
        $services = $this->service_model->get();

        $site = $this->SiteSettings_model->get();

    	$data = [
            'title' => 'Home',
            'sliderImages' => $this->SliderImage_model->get(),
            'services' => $services,
            'site' => $site
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer', $data);    	
    }

    public function about()
    {
        $services = $this->service_model->get();
        $site = $this->SiteSettings_model->get();

        $users = $this->user_model->get();

    	$data = [
            'title' => 'About Us',
            'site' => $site,
            'users' => $users,
            'services' => $services,
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('templates/footer', $data);    	
    }

    public function contact()
    {
        $services = $this->service_model->get();
        $data['title'] = 'Contact Us';
    	$data['services'] = $services;

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/contact', $data);
            $this->load->view('templates/footer', $data);
        }
        else
        {
            $this->load->model('feedback_model');
            $this->feedback_model->create();

            $this->session->set_flashdata('success_message', 'Thank you for your feedback.');

            redirect(base_url('index.php/contact'));
        }           	
    }
}