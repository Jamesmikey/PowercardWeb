<?php

class User_model extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function get()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function checkPassword($id)
    {
        $query = $this->db->get_where('users', array('password' => md5($this->input->post('old_password'))));

        return $query->row_array();
    }

    public function changePassword($id)
    {
        $data = array(
            'password' => md5($this->input->post('password')),
        );

        return $this->db->where('id', $id)->update('users', $data);
    }

    public function find($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));;

        return $query->row_array();
    }

    public function update($id)
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'position' => $this->input->post('position'),
        );

        return $this->db->where('id', $id)->update('users', $data);        
    }
	
	public function create()
	{
    	$data = array(
    		'first_name' => $this->input->post('first_name'),
    		'last_name' => $this->input->post('last_name'),
    		'phone' => $this->input->post('phone'),
    		'password' => md5($this->input->post('password')),
    	);

		return $this->db->insert('users', $data);
	}

    public function login()
    {
        $phone = $this->input->post('phone');
        $password = md5($this->input->post('password'));

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('phone', $phone);
        $this->db->where('password', $password);

        return $query = $this->db->get();
    }
}
