<?php

class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('service_model');    
        $this->load->model('ServiceImage_model');   
    }

      public function show($id)
      {
            $services = $this->service_model->get();
            $service = $this->service_model->find($id);

            if($service === NULL)
            {
                show_404();
            }

            $images = $this->ServiceImage_model->getByService($service['id']);
            
            $data = [
                'title'   => 'Services',
                'services' => $services,
                'service' => $service,
                'images'  => $images,
            ];

            
            $this->load->view('templates/header', $data);
            $this->load->view('services/show', $data);
            $this->load->view('templates/footer', $data);      
      }
}