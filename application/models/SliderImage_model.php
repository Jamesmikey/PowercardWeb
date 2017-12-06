<?php

class SliderImage_model extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function find($id)
    {
        $query = $this->db->get_where('slider_images', array('id' => $id));

        return $query->row_array();
    }

    public function delete($id)
    {
        return $this->db->delete('slider_images', array('id' => $id));
    }    
	

    public function update($id, $path = null)
    {
        if (null !== $path) {
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'path' => $path,
            );
        }else{
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
            );            
        }

        return $this->db->where('id', $id)->update('slider_images', $data);         
    }

	public function create($path)
	{
    	$data = array(
    		'path' => $path,
    		'title' => $this->input->post('title'),
    		'description' => $this->input->post('description'),
    	);

		return $this->db->insert('slider_images', $data);
	}

    public function get()
    {
        $query = $this->db->get('slider_images');

        return $query->result_array();
    }
}
