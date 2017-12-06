<?php

class ServiceImage_model extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function find($id)
    {
        $query = $this->db->get_where('service_images', array('id' => $id));

        return $query->row_array();
    }

    public function update($id)
    {
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        );

        return $this->db->where('id', $id)->update('service_images', $data);        
    }

    public function delete($id)
    {
        return $this->db->delete('service_images', array('id' => $id));
    }

    public function getByService($serviceId)
    {
        $query = $this->db->where('service_id', $serviceId)->order_by('created_at', 'DESC')->get('service_images');

        return $query->result_array();        
    }

    public function create($path, $serviceId)
    {
        $data = array(
            'path' => $path,
            'service_id' => $serviceId,
        );

        return $this->db->insert('service_images', $data);        
    }
}
