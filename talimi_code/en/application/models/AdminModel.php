<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    // FAQs
    
    public function getFaqs()
    {
		$this->db->select('*');
        $this->db->from('faq');
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function createFaq($data)
    {
        $result = $this->db->insert('faq', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function updateFaq($data, $condition)
    {
        $this->db->where($condition);
        $this->db->update('faq', $data);
        return $this->db->affected_rows();
    }
    public function getThisFaq($condition)
    {
		$this->db->select('*');
        $this->db->from('faq');
        $this->db->where($condition);
        $data = $this->db->get()->row();
        return $data;
    }
    public function getRegistration()
    {
		$this->db->select('*');
        $this->db->from('save_registration');
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function getThisRegistration($condition)
    {
		$this->db->select('*');
        $this->db->from('save_registration');
        $this->db->where($condition);
        $data = $this->db->get()->row();
        return $data;
    }

}
