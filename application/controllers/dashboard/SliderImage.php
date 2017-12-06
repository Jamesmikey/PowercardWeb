<?php

class SliderImage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('SliderImage_model');		
	}

	public function index()
	{
		$data = [
			'title' => 'Slider Images',
			'content' => 'dashboard/slider-images/index',
            'sliderImages' => $this->SliderImage_model->get(),
		];
		
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/footer', $data);		
	}

    public function edit($id)
    {
        $sliderImage = $this->SliderImage_model->find($id);

        $data = [
            'title'       => $sliderImage['title'],
            'content'     => 'dashboard/slider-images/edit',
            'sliderImage' => $sliderImage,
        ];

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        
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

                $this->SliderImage_model->update($sliderImage['id'], $path);
            }
            else
            {
                $this->SliderImage_model->update($sliderImage['id']);
            }

            $this->session->set_flashdata('success_message', 'Updated Successful');

            redirect(base_url('index.php/dashboard/slider-images'));         
        }      
    }

    public function delete($id)
    {
        $sliderImage = $this->SliderImage_model->find($id);

        $this->SliderImage_model->delete($sliderImage['id']);

        $this->session->set_flashdata('success_message', 'Deleted Successful');

        redirect(base_url('index.php/dashboard/slider-images'));     
    }    

    public function create()
    {

        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']        = time();
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            // $error = array('error' => $this->upload->display_errors());

			$data = [
				'title' => 'Upload Image',
				'error' => [],
				'content' => 'dashboard/slider-images/create',
			];            

	    	$this->load->view('templates/header', $data);
	    	$this->load->view('templates/footer', $data);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $path = $data['upload_data']['orig_name'];

                $query = $this->SliderImage_model->create($path);

                if(!query)
                {
                	$this->session->set_flashdata('error_message', 'Error! Please try again later.');
                }

                $this->session->set_flashdata('success_message', 'Image successfully uploaded.');

                redirect(base_url('index.php/dashboard/slider-images'));
        }
    }		
}