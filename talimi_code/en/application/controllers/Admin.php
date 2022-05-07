<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller

{



	public function __construct()

	{

		parent::__construct();

		$this->load->model('HomeModel');

		$this->load->model('AdminModel');
	}



	public function index()

	{

		$data['page_name'] = "Home Page";

		$data['content'] = "admin-pages/dashboard";

		$this->load->view('template/index', $data);
	}



	public function admin_faqs()

	{

		$data['page_name'] = "Manage FAQs";

		$data['content'] = "admin-pages/faqs";

		$this->load->view('template/index', $data);
	}

	public function getFaqs()

	{

		$faqsList = $this->AdminModel->getFaqs();

		if ($faqsList === "") {

			echo json_encode(["status" => "success", "message" => "No data found"]);
		} else {

			echo json_encode(["status" => "success", 'data' => $faqsList]);
		}
	}

	public function createUpdateFaq()

	{

		$faq_id = $this->input->post('faq_id');

		$data = array(

			'faq_question' => $this->input->post('faq_question'),

			'faq_answer' => $this->input->post('faq_answer')

		);

		if ($faq_id != 0) {

			$condition = array(

				'faq_id' => $faq_id

			);

			$updateFaq = $this->AdminModel->updateFaq($data, $condition);

			if ($updateFaq != 0) {

				echo json_encode(["status" => "success", "message" => "Successfuly updated!"]);
			} else {

				echo json_encode(["status" => "error", "message" => "Something went wrong"]);
			}
		} else {

			$createFaq = $this->AdminModel->createFaq($data);

			if ($createFaq != 0) {

				echo json_encode(["status" => "success", "message" => "Successfuly created!"]);
			} else {

				echo json_encode(["status" => "error", "message" => "Something went wrong"]);
			}
		}
	}

	public function getThisFaq()

	{

		$condition = array(

			'faq_id' => $this->input->post('faq_id')

		);

		$faqData = $this->AdminModel->getThisFaq($condition);

		if ($faqData === "") {

			echo json_encode(["status" => "success", "message" => "No data found"]);
		} else {

			echo json_encode(["status" => "success", 'data' => $faqData]);
		}
	}

	// Registration

	public function admin_registration()

	{

		$data['page_name'] = "Registration Details";

		$data['content'] = "admin-pages/registration";

		$this->load->view('template/index', $data);
	}

	public function getRegistration()

	{

		$registrationList = $this->AdminModel->getRegistration();

		if ($registrationList === "") {

			echo json_encode(["status" => "success", "message" => "No data found"]);
		} else {

			echo json_encode(["status" => "success", 'data' => $registrationList]);
		}
	}

	public function getThisRegistration()

	{

		$condition = array(

			'reg_id' => $this->input->post('reg_id')

		);

		$registrationData = $this->AdminModel->getThisRegistration($condition);

		if ($registrationData === "") {

			echo json_encode(["status" => "success", "message" => "No data found"]);
		} else {

			echo json_encode(["status" => "success", 'data' => $registrationData]);
		}
	}







	public function checkStartNumber()
	{

		$data = array(

			'company_name' => $this->input->post('company_name')

		);



		if ($result) {

			echo json_encode(["status" => "success", 'data' => $result]);
		} else {

			echo json_encode(["status" => "error", 'data' => $result]);
		}
	}
}
