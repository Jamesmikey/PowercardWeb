<?php

class SiteSettings_model extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function get()
    {
        $query = $this->db->get('site_settings');

        return $query->row_array();
    }

    public function update($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'tag_line' => $this->input->post('tag_line'),
            'about' => $this->input->post('about'),
        );

        return $this->db->where('id', $id)->update('site_settings', $data);
    }

}
