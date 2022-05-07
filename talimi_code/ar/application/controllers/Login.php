<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel');
    }
	
	public function login_check()
	{             
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        $result = $this->HomeModel->attemptLogin($data);
    
        if ($result) {
            // $finalResult = $this->fetchLoggedUserData($result->user_id);
            $this->setSessiondata($result);
            echo json_encode(["status" => "success", 'data' => $result]);
        } else {
            echo json_encode(["status" => "error", 'data' => $result]);
        }
    }
    public function fetchLoggedUserData($userId)
    {
		$condition = array(
			'user_id' => $userId
		);
        $result = $this->HomeModel->getLoggedUserData($condition);
        return $result;
    }
	
    private function setSessionData($result)
    {
        $userData = array(
            'login_id' => $result->login_id,
            'name'  => $result->full_name,
            // 'username' => $username,
            'logged_in' => TRUE
        );

        $this->session->set_userdata($userData);
    }
	

    public function logout()
    {
          $this->session->sess_destroy();
         redirect(base_url('login'));
        $user_data = $this->session->userdata();
        foreach ($user_data as $key => $value)
        {
            $this->session->unset_userdata($key);
        }
        $this->session->sess_destroy('userdata');
        echo json_encode(array(
            "status" => "success"));
    }
}
