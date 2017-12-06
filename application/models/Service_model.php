<?php

class Service_model extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function find($id)
    {
        $query = $this->db->get_where('services', array('id' => $id ));

        return $query->row_array();
    }

    public function get()
    {
        $query = $this->db->order_by('created_at', 'DESC')->get('services');

        return $query->result_array();
    }

    public function delete($id)
    {
        return $this->db->delete('services', array('id' => $id));
    }    
	
	public function create($path)
	{
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('body'),
            'image' => $path,
        );

        return $this->db->insert('services', $data);
	}

    public function update($id, $path = null)
    {
        if (null !== $path) {
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('body'),
                'image' => $path,
            );
        }else{
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('body'),
            );            
        }

        return $this->db->where('id', $id)->update('services', $data);        
    }
}
