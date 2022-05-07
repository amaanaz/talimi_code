<?php


class ItemCRUDModel extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('start_number', $this->input->get("search"));
          $this->db->or_like('end_number', $this->input->get("search")); 
                    $this->db->or_like('price', $this->input->get("search")); 

        }
        $query = $this->db->get("pricerange");
        return $query->result();
    }


    public function insert_item()
    {    
        
        $data = array(
            'start_number' => $this->input->post('start_number'),
                        'end_number' => $this->input->post('end_number'),
                                    'price' => $this->input->post('price'),

            'date' => date('Y-m-d H:m:d'),
            'created_by' => $this->session->userdata('login_id'),


            'status' => '1'
        );
        return $this->db->insert('pricerange', $data);
    }


    public function update_item($id) 
    {
        $data=array(
             'start_number' => $this->input->post('start_number'),
                        'end_number' => $this->input->post('end_number'),
                                    'price' => $this->input->post('price'),

            'date' => date('Y-m-d H:m:d'),
            'created_by' => $this->session->userdata('login_id')

        );
        if($id==0){
            return $this->db->insert('pricerange',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('pricerange',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('pricerange', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('pricerange', array('id' => $id));
    }
}
?>