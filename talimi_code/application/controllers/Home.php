<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        
        
      $this->load->library('form_validation');
      $this->load->library('session');
      
        $this->load->model('HomeModel');
    }

	public function testHomeOne()
	{
		$data['page_name']="Home Page";
		$data['content']="home-pages/home_page";
		$this->load->view('template/index',$data);
	}
	public function index()
	{
		$data['page_name']="Home Page";
		$data['content']="home-pages/home";
		$this->load->view('s-template/index',$data);
	}
	public function faq()
	{
		$data['page_name']="FAQs";
		$data['content']="home-pages/faqs";
		$data['faq_data']= $this->HomeModel->getFaqData();
		$this->load->view('s-template/index',$data);
	}
	public function plans()
	{
		$data['page_name']="Plans";
		$data['content']="home-pages/plans";
		$this->load->view('s-template/index',$data);
	}
	public function contact_us()
	{
		$data['page_name']="Contact Us";
		$data['content']="home-pages/contact_us";
		$this->load->view('s-template/index',$data);
	}
	public function login()
	{
		$data['page_name']="Login";
		$data['content']="home-pages/login";
		$this->load->view('s-template/index',$data);
	}
	public function registration()
	{
		$data['page_name']="Registration";
		$data['content']="home-pages/registration";
		$this->load->view('s-template/index',$data);
	}
	public function registration_submit()
	{
        $data = array(
            'company_name' => $this->input->post('company_name'),
            'school_name' => $this->input->post('school_name'),
            'school_address' => $this->input->post('school_address'),
            'contact_number' => $this->input->post('contact_number'),
            'email_id' => $this->input->post('email_id'),
            'no_of_students_school' => $this->input->post('no_of_students_school'),
            'no_of_teachers_school' => $this->input->post('no_of_teachers_school'),
            'education_type' => $this->input->post('education_type')
        );
        $result = $this->HomeModel->save_registration($data);
  
        if ($result) {
			echo json_encode(["status" => "success", "data" =>$data]);
		} else {
			echo json_encode(["status" => "error", "data" => $result]);
		}
	}
	
	
		public function registrationNew()
	{
		$data['page_name']="Registration";
		$data['content']="home-pages/registration-quote";
		$this->load->view('s-template/index',$data);
	}
	
	
	 public function registrationStore()
   {
       // $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('school_name', 'School Name', 'required');
        $this->form_validation->set_rules('school_address_building', 'School Building', 'required');
            $this->form_validation->set_rules('school_address_road', 'School Road', 'required');
               $this->form_validation->set_rules('school_address_block', 'School Block', 'required');
               
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'required');
        $this->form_validation->set_rules('email_id', 'Email ', 'required');
        
        $this->form_validation->set_rules('no_of_students_school', 'No Of Student In School', 'required');
        $this->form_validation->set_rules('no_of_teachers_school', 'No Of Teacher In School', 'required');
        $this->form_validation->set_rules('education_type', 'Education Type', 'required');





        if ($this->form_validation->run() == FALSE){
            
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('registration'));
            
            
        }else{
            

         $data = array(
            'company_name' => $this->input->post('company_name'),
            'school_name' => $this->input->post('school_name'),
            'school_address_building' => $this->input->post('school_address_building'),
               'school_address_road' => $this->input->post('school_address_road'),
                  'school_address_block' => $this->input->post('school_address_block'),
            'contact_number' => $this->input->post('contact_number'),
            'email_id' => $this->input->post('email_id'),
            'no_of_students_school' => $this->input->post('no_of_students_school'),
            'no_of_teachers_school' => $this->input->post('no_of_teachers_school'),
            'education_type' => $this->input->post('education_type')
        );
        
        $result = $this->HomeModel->save_registration($data);
        
        if($result){
             
             
            $this->session->set_flashdata('success', 'Registered Successfully');
            redirect(base_url('quoterange/'.$result));
           
        }else{
            
            
            $this->session->set_flashdata('fail', 'Registration Failed');
            redirect(base_url('registration'));
            
       
        }
         
      }
  
  }
    
    
    
      public function quoteshow($id='')
   {
       
        $list=$this->db->get_where('save_registration',array('reg_id'=>$id))->row();
        
       
        
   if(!empty($list)){
        $studentRange=$list->no_of_students_school;
               $amount=$this->db->where("$studentRange BETWEEN start_number AND end_number")->get('pricerange')->row()->price;
	$data['amount']=$amount;
   }else{
        redirect(base_url('registration'));
   }
        
        // print_r($this->db->last_query());
        // exit;
        
        
		$data['page_name']="";
		$data['list']=$list;
	
		
		$data['content']="home-pages/quoterange";
		
		$this->load->view('s-template/index',$data);
		
		
		
   }
   
   
   
   
   
		public function privacypolicy()
	{
		$data['page_name']="Privacy Policy";
		$data['content']="home-pages/privacypolicy";
		$this->load->view('s-template/index',$data);
	}
	
	
		public function flg()
	{
		$data['page_name']="flg";
		$data['content']="home-pages/flg";
		$this->load->view('s-template/index',$data);
	}
	
	
}
