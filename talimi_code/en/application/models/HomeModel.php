<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{
    public function getFaqData()
    {
		$this->db->select('*');
        $this->db->from('faq');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function save_registration($data)
    {           
        $result = $this->db->insert('save_registration', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    public function attemptLogin($condition)
    {
		$this->db->select('*');
        $this->db->from('login');
        $this->db->where($condition);
        $data = $this->db->get()->row();
        return $data;
    }
}
