<?php

class Feedback_model extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function get()
    {
        $query = $this->db->get('feedback');
        return $query->result_array();
    }

    public function find($id)
    {
        $query = $this->db->get_where('feedback', array('id' => $id));;

        return $query->row_array();
    }
	
	public function create()
	{
    	$data = array(
    		'name' => $this->input->post('name'),
    		'phone' => $this->input->post('phone'),
    		'email' => $this->input->post('email'),
    		'message' => $this->input->post('message'),
    	);

		return $this->db->insert('feedback', $data);
	}
}
