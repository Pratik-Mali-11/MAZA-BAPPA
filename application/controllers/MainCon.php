<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MainCon extends CI_Controller
{
    public function __construct()  
    {
        parent::__construct();
        $this->load->model('Db_model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
        
    }
    public function index()
	{	
		if(isset($_SESSION['status'])) {
			unset($_SESSION['status']);
		}	
        $data =$this->Db_model->get_by_pagename('Main Page');
        // print_r($data);
		$this->load->view('index',compact('data'));
	}
	public function error()
	{

		$this->load->view('error');
	}

	public function book_slot()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('murti_type', 'Type of Murti', 'required');
		$this->form_validation->set_rules('division_name', 'Division Name', 'required');
		$this->form_validation->set_rules('pond_name', 'Visarjan Pond Name', 'required');
		$this->form_validation->set_rules('book_date', 'Visarjan Date', 'required');
		$this->form_validation->set_rules('book_time', 'Timeslot', 'required');
		
		if ($this->form_validation->run()) {
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['mobile_no'] = $this->input->post('mobile_no');
			$formArray['email'] = $this->input->post('email');
			$formArray['murti_type'] = $this->input->post('murti_type');
			$formArray['division_name'] = $this->input->post('division_name');
			$formArray['pond_name'] = $this->input->post('pond_name');
			$formArray['book_date'] = $this->input->post('book_date');
			$formArray['book_time'] = $this->input->post('book_time');
			$t= "slot_booking";
			$id = $this->Db_model->insertdata($t,$formArray);
				// $str = substr($formArray['name'], 0, 4);
				// $u_id = $id . $str . "2021";
				date_default_timezone_set("Asia/Kolkata");
				$time = date("his");
				$u_id = $id . $time . "21";
				$formArray['u_id'] = $u_id;
				if ($this->Db_model->update_uid($u_id,$id,$t) AND $id != false) {
					   $this->session->set_userdata('status',$formArray);
					   redirect('Book-slot');
				} else {
					$this->session->set_flashdata('status', 'Insertion Error.!!');
					redirect('Book-slot');
				}
		} else {
			$this->load->view('book_slot');
		}
		
	}

	public function get_ammonium()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('murti_type', 'Type of Murti', 'required');
		$this->form_validation->set_rules('booking_type', 'Booking Type', 'required');
		$this->form_validation->set_rules('murti_weight', 'Murti Weight', 'required');
		$this->form_validation->set_rules('division_name', 'Division Name', 'required');
		$this->form_validation->set_rules('center_name', 'Center Name', 'required');
		
		if ($this->form_validation->run()) {
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['mobile_no'] = $this->input->post('mobile_no');
			$formArray['email'] = $this->input->post('email');
			$formArray['murti_type'] = $this->input->post('murti_type');
			$formArray['booking_type'] = $this->input->post('booking_type');
			$formArray['murti_weight'] = $this->input->post('murti_weight');
			$formArray['division_name'] = $this->input->post('division_name');
			$formArray['center_name'] = $this->input->post('center_name');
			$t= "get_ammonium";
			$id = $this->Db_model->insertdata($t,$formArray);
				date_default_timezone_set("Asia/Kolkata");
				$time = date("his");
				$u_id = $id . $time . "21";
				$formArray['u_id'] = $u_id;
				if ($this->Db_model->update_uid($u_id,$id,$t) AND $id != false) {
					   $this->session->set_userdata('status',$formArray);
					   redirect('Get-ammonium');
				} else {
					$this->session->set_flashdata('status', 'Insertion Error.!!');
					redirect('Get-ammonium');
				}
		} else {
			$this->load->view('get_ammonium');
		}
		
	}

	public function org_registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('org_type', 'Organization Type', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('reg_date', 'Registration Date', 'required');
		$this->form_validation->set_rules('reg_no', 'Registration Number', 'required');
		$this->form_validation->set_rules('org_address', 'Address', 'required');
		$this->form_validation->set_rules('per_name', 'President Name', 'required');
		// $this->form_validation->set_rules('prod_image', 'Registration Certificate', 'required');
		$this->form_validation->set_rules('total_member', 'Total Members', 'required');
		
		if ($this->form_validation->run()) {
			$ori_filename = $_FILES['prod_image']['name'];
			date_default_timezone_set("Asia/Kolkata");
			$time = date("his");
			$new_name = $time.'-'.str_replace(' ', '-', $ori_filename);
			$config =[
				'upload_path' => './layout/org-certificates/',
				'allowed_types' => 'pdf|jpeg|jpg|png',
				'file_name' => $new_name,
			];

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('prod_image'))
			{
				$imageError = array('imageError' => $this->upload->display_errors());
				$this->load->view('Org-registration', $imageError);
				// var_dump($error);
			}
			else
			{
				$prod_filename = $this->upload->data('file_name');
				$data = array();
				$data['name'] = $this->input->post('name');
				$data['org_type'] = $this->input->post('org_type');
				$data['mobile_no'] = $this->input->post('mobile_no');
				$data['email'] = $this->input->post('email');
				$data['reg_date'] = $this->input->post('reg_date');
				$data['reg_no'] = $this->input->post('reg_no');
				$data['org_address'] = $this->input->post('org_address');
				$data['per_name'] = $this->input->post('per_name');
				$data['reg_certificate'] = $prod_filename;
				$data['total_member'] = $this->input->post('total_member');
				$t= "org_registration";
				$id = $this->Db_model->insertdata($t,$data);
				date_default_timezone_set("Asia/Kolkata");
				$time = date("his");
				$u_id = $id . $time . "21";
				$data['u_id'] = $u_id;
				if ($this->Db_model->update_uid($u_id,$id,$t) AND $id != false) {
					$this->session->set_userdata('status',$data);
					redirect('Org-registration');
				} else {
					$this->session->set_flashdata('error_msg', 'Insertion Error.!!');
					redirect('Org-registration');
				}
			}
		} else {
			$this->load->view('Org-registration');
		}
		
	}


	public function tank_on_wheel()
	{
		
		$this->form_validation->set_rules('society_name', 'Society Name', 'required');
		$this->form_validation->set_rules('society_addr', 'Society Address', 'required');
		$this->form_validation->set_rules('secretary_name', 'Secretary Name', 'required');
		$this->form_validation->set_rules('secretary_email', 'Secretary Email', 'required');
		$this->form_validation->set_rules('sec_mobile_no', 'Secratory Mobile No', 'required');
		$this->form_validation->set_rules('division_name', 'Division Name', 'required');
		$this->form_validation->set_rules('book_date', 'Visarjan Date', 'required');
		$this->form_validation->set_rules('book_time', 'Timeslot', 'required');
		
		if ($this->form_validation->run()) {
			$formArray = array();
			$formArray['society_name'] = $this->input->post('society_name');
			$formArray['society_addr'] = $this->input->post('society_addr');
			$formArray['secretary_name'] = $this->input->post('secretary_name');
			$formArray['secretary_email'] = $this->input->post('secretary_email');
			$formArray['sec_mobile_no'] = $this->input->post('sec_mobile_no');
			$formArray['division_name'] = $this->input->post('division_name');
			$formArray['book_date'] = $this->input->post('book_date');
			$formArray['book_time'] = $this->input->post('book_time');
			$t= "tank_on_wheel";
			$id = $this->Db_model->insertdata($t,$formArray);
				// $str = substr($formArray['name'], 0, 4);
				// $u_id = $id . $str . "2021";
				date_default_timezone_set("Asia/Kolkata");
				$time = date("his");
				$u_id = $id . $time . "21";
				$formArray['u_id'] = $u_id;
				if ($this->Db_model->update_uid($u_id,$id,$t) AND $id != false) {
					   $this->session->set_userdata('status',$formArray);
					   redirect('Tank-On-Wheel');
				} else {
					$this->session->set_flashdata('status', 'Insertion Error.!!');
					redirect('Tank-On-Wheel');
				}
		} else {
			$this->load->view('tank_on_wheel');
		}
		
	}

	public function check_status()
	{
		$this->form_validation->set_rules('status_type', 'Status Type', 'required');
		$this->form_validation->set_rules('id_email', 'Unique Id or Email', 'required');
		if ($this->form_validation->run()) {
			$data = array();
			$data['status_type'] = $this->input->post('status_type');
			$data['id_email'] = $this->input->post('id_email');
			if ($data['status_type'] == 'Ganesh Visarjan Slot') {
				$this->db->where('email', $data['id_email']);
				$this->db->or_where('user_id', $data['id_email']);
				$query = $this->db->get('slot_booking');
				if($query->num_rows()>0){
					$this->session->set_userdata('search_data',$query->result());
					$this->load->view('check_status', array('slot_booking' => $query->result()));
				}
				else {
					$this->load->view('check_status', array('warning' => "No Results Found!!!"));
				}
			} 
			elseif ($data['status_type'] == 'Ammonium Powder Registration') {
				$this->db->where('email', $data['id_email']);
				$this->db->or_where('user_id', $data['id_email']);
				$query = $this->db->get('get_ammonium');
				if($query->num_rows()>0){
					$this->session->set_userdata('search_data',$query->result());
					$this->load->view('check_status', array('ammo_booking' => $query->result()));
				}
				else {
					$this->load->view('check_status', array('warning' => "No Results Found!!!"));
				}
			} 
			elseif ($data['status_type'] == 'Organisation Registration') {
				$this->db->where('email', $data['id_email']);
				$this->db->or_where('org_id', $data['id_email']);
				$query = $this->db->get('org_registration');
				if($query->num_rows()>0){
					$this->load->view('check_status', array('org_registr' => $query->result()));
				}
				else {
					$this->load->view('check_status', array('warning' => "No Results Found!!!"));
				}
			} 
			elseif ($data['status_type'] == 'Tank on Wheel') {
				$this->db->where('secretary_email', $data['id_email']);
				$this->db->or_where('user_id', $data['id_email']);
				$query = $this->db->get('tank_on_wheel');
				if($query->num_rows()>0){
					$this->session->set_userdata('search_data',$query->result());
					$this->load->view('check_status', array('tank_on_wheel' => $query->result()));
				}
				else {
					$this->load->view('check_status', array('warning' => "No Results Found!!!"));
				}
			} 
			else {
				$this->session->set_flashdata('status', 'Insertion Error.!!');
				redirect('check_status');
			}
		} 
		else {
			$this->load->view('check_status');
		}
	}

	public function check_visarjan_invoice()
	{
		$id = $this->input->get('user_id');
		$result = array();
		foreach($_SESSION['search_data'] as $row) {
			if($row->user_id == $id) {
				$result['u_id'] = $row->user_id;
				$result['name'] = $row->name;
				$result['book_date'] = $row->book_date;
				$result['book_time'] = $row->book_time;
				$result['division_name'] = $row->division_name;
				$result['pond_name'] = $row->pond_name;
			}
		}
		$this->session->set_userdata('status',$result);
		$this->invoice();
	}

	public function check_ammonium_invoice()
	{
		$id = $this->input->get('user_id');
		$result = array();
		foreach($_SESSION['search_data'] as $row) {
			if($row->user_id == $id) {
				$result['u_id'] = $row->user_id;
				$result['name'] = $row->name;
				$result['murti_type'] = $row->murti_type;
				$result['booking_type'] = $row->booking_type;
				$result['murti_weight'] = $row->murti_weight;
				$result['division_name'] = $row->division_name;
				$result['center_name'] = $row->center_name;
			}
		}
		$this->session->set_userdata('status',$result);
		$this->ammonium_invoice();
	}

	public function check_tank_invoice()
	{
		$id = $this->input->get('user_id');
		$result = array();
		foreach($_SESSION['search_data'] as $row) {
			if($row->user_id == $id) {
				$result['u_id'] = $row->user_id;
				$result['society_name'] = $row->society_name;
				$result['society_addr'] = $row->society_addr;
				$result['secretary_name'] = $row->secretary_name;
				$result['sec_mobile_no'] = $row->sec_mobile_no;
				$result['book_date'] = $row->book_date;
				$result['book_time'] = $row->book_time;
			}
		}
		$this->session->set_userdata('status',$result);
		$this->tankonwheel_invoice();
	}

	public function invoice()
	{
		$this->load->view('invoice');
	}

	public function ammonium_invoice()
	{
		$this->load->view('ammonium_invoice');
	}

	public function tankonwheel_invoice()
	{
		$this->load->view('tankonwheel_invoice');
	}

	public function ganesha_cart()
	{
		$this->load->view('ecommerce/ganesha-cart');
	}

	public function ganesha_shop()
	{
		$this->load->view('ecommerce/ganesha-shop');
	}

	public function ganesha_login()
	{
		$this->load->view('ecommerce/login-register');
	}

	public function ganesha_account()
	{
		$this->load->view('ecommerce/my-account');
	}

	public function ganesha_product_detail()
	{
		$this->load->view('ecommerce/product-details');
	}



}	
?>