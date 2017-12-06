<?php

class Service extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('service_model');
		$this->load->model('ServiceImage_model');	
	}

	public function index()
	{
		$data = [
			'title' => 'Services',
			'content' => 'dashboard/services/index',
			'services' => $this->service_model->get(),
		];
		
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/footer', $data);		
	}

	public function create()
	{
		$data = [
			'title' => 'Add New Service',
			'content' => 'dashboard/services/create'
		];

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['file_name']            = time();

        $this->load->library('upload', $config);		

		
		if ($this->form_validation->run() === FALSE)
		{
	    	$this->load->view('templates/header', $data);
	    	$this->load->view('templates/footer', $data);
		}	
		else
		{
	        if ( ! $this->upload->do_upload('image'))
	        {
	                $error = array('error' => $this->upload->display_errors());

	                var_dump($error);die();
	        }

	        $data = array('upload_data' => $this->upload->data());

	        $path = $data['upload_data']['orig_name'];

        	$this->service_model->create($path);

        	$this->session->set_flashdata('success_message', 'Submitted Successful');

        	redirect(base_url('index.php/dashboard/services'));			
		}	
	}

	public function show($id)
	{
		$service = $this->service_model->find($id);

		$images = $this->ServiceImage_model->getByService($service['id']);
		
		$data = [
			'title'   => 'Services',
			'content' => 'dashboard/services/show',
			'service' => $service,
			'images'  => $images,
		];

		
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/footer', $data);
	}

	public function edit($id)
	{
		$service = $this->service_model->find($id);
		
		$data = [
			'title'   => 'Services',
			'content' => 'dashboard/services/edit',
			'service' => $service,
		];

		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		
		if ($this->form_validation->run() === FALSE)
		{
	    	$this->load->view('templates/header', $data);
	    	$this->load->view('templates/footer', $data);
		}	
		else
		{

	        $config['upload_path']          = './public/uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        // $config['max_size']             = 100;
	        // $config['max_width']            = 1024;
	        // $config['max_height']           = 768;
	        $config['file_name']            = time();

	        $this->load->library('upload', $config);

	        if ($this->upload->do_upload('file'))
	        {
                $data = array('upload_data' => $this->upload->data());

                $path = $data['upload_data']['orig_name'];

                $this->service_model->update($service['id'], $path); 
	        }
	        else
	        {
	        	$this->service_model->update($service['id']);
	        }

        	$this->session->set_flashdata('success_message', 'Updated Successful');

        	redirect(base_url('index.php/dashboard/services'));
		}
	}	

	public function delete($id)
	{
		$service = $this->service_model->find($id);

		$this->service_model->delete($service['id']);

		$this->session->set_flashdata('success_message', 'Deleted Successful');

		redirect(bse_url('index.php/dashboard/services'));		
	}

	public function storeImage()
	{
        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['file_name']            = time();

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());

                var_dump($error);
        }
        else
        {
                $serviceId = $this->input->post('service_id');;

                $data = array('upload_data' => $this->upload->data());

                $path = $data['upload_data']['orig_name'];


                $this->ServiceImage_model->create($path, $serviceId);
        }        
	}

	public function updateImage($serviceId, $imageId)
	{
		$image = $this->ServiceImage_model->find($imageId);

		$this->ServiceImage_model->update($image['id']);

		$this->session->set_flashdata('success_message', 'Updated Successful');

		redirect(base_url('index.php/dashboard/services/' . $serviceId));		
	}

	public function destroyImage($serviceId, $imageId)
	{
		$image = $this->ServiceImage_model->find($imageId);


		$filename = base_url('public/uploads/' . $image['path']);

		$this->ServiceImage_model->delete($image['id']);

		$this->session->set_flashdata('success_message', 'Deleted Successful');

		redirect(base_url('index.php/dashboard/services/' . $serviceId));
	}
}