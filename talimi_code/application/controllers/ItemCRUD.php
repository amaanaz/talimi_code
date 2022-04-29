<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ItemCRUD extends CI_Controller {


   public $itemCRUD;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('ItemCRUDModel');


      $this->itemCRUD = new ItemCRUDModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->itemCRUD->get_itemCRUD();

       
       
       	$data['page_name'] = "";
		$data['content'] = "admin-pages/list";
		$this->load->view('template/index', $data);
		
		
		
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $item = $this->itemCRUD->find_item($id);

      
             $data['item']=$item;
       	$data['page_name'] = "";
		$data['content'] = "admin-pages/show";
		$this->load->view('template/index', $data);
		
		
		
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
     
      
         	$data['page_name'] = "";
		$data['content'] = "admin-pages/create";
		$this->load->view('template/index', $data);
		
		
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('start_number', 'Start Number', 'required');
        $this->form_validation->set_rules('end_number', 'End Number', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('itemCRUD/create'));
        }else{
            
    
        
           $this->itemCRUD->insert_item();
           redirect(base_url('itemCRUD'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->itemCRUD->find_item($id);


    //   $this->load->view('theme/header');
    //   $this->load->view('itemCRUD/edit',array('item'=>$item));
    //   $this->load->view('theme/footer');
       
       $data['item']=$item;
       	$data['page_name'] = " ";
		$data['content'] = "admin-pages/edit";
		$this->load->view('template/index', $data);
		
		
		
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        
        $this->form_validation->set_rules('start_number', 'Start Number', 'required');
        $this->form_validation->set_rules('end_number', 'End Number', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('itemCRUD/edit/'.$id));
        }else{ 
          $this->itemCRUD->update_item($id);
          redirect(base_url('itemCRUD'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->itemCRUD->delete_item($id);
       redirect(base_url('itemCRUD'));
   }
}