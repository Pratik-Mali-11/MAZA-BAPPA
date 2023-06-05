<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->logged_in();
        $this->load->model('Db_model');

    }

    private function logged_in()
    {
        if (!$this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

    public function index()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Db_model->fetch_data();
        $this->load->view('dashboard/index', $data);
    }

    public function division()
	{
        $data['fetch'] = $this->Db_model->fetch_data();
		$this->load->view('dashboard/division/division-dashboard', $data);
	}

    public function visrjan_data()
    {
        // $data['fetch'] = $this->Db_model->fetch_data();
        $data =$this->Db_model->get_data('slot_booking');
        // print_r($data[0]->user_id);
        $this->load->view('dashboard/visarjan-data',compact('data'));
    }

    public function ammonium_data()
    {
        // $data['fetch'] = $this->Db_model->fetch_data();
        $data =$this->Db_model->get_data('get_ammonium');
        // print_r($data);
        $this->load->view('dashboard/ammonium-data',compact('data'));
    }

    public function org_reg_data()
    {
        // $data['fetch'] = $this->Db_model->fetch_data();
        $data =$this->Db_model->get_reg_org_data('org_registration');
        // print_r($data);
        $this->load->view('dashboard/org-data',compact('data'));
    }
    public function org_apr_data()
    {
        // $data['fetch'] = $this->Db_model->fetch_data();
        $data =$this->Db_model->get_apr_org_data('org_registration');
        // print_r($data);
        $this->load->view('dashboard/org-apr-data',compact('data'));
    }

public function add_announcement()
    {
        $this->load->view('dashboard/add-announcements');
    }
public function edit_announcement()
    {
        $data =$this->Db_model->get_data('announcement');
        $this->load->view('dashboard/edit-announcements',compact('data'));
    }

public function edit_single_announcement($id)
    {
        $data =$this->Db_model->get_by_id($id,'announcement');
        $this->load->view('dashboard/edit-announcement-single',compact('data'));

    }
    public function admin_profile()
    {
        // $data['fetch'] = $this->Db_model->fetch_data();
        $data =$this->Db_model->get_data('get_ammonium');
        // print_r($data);
        $this->load->view('dashboard/edit-profile',compact('data'));
    }
    public function edit_popup()
    {
        // $data['fetch'] = $this->Db_model->fetch_data();
        $data =$this->Db_model->get_data('guideline_popups');
        // print_r($data);
        $this->load->view('dashboard/edit-popupsdata',compact('data'));
    }

    public function edit_slider()
    {
        // $data['fetch'] = $this->Db_model->fetch_data();
        // $data =$this->Db_model->get_data('guideline_popups');
        // print_r($data);
        $this->load->view('dashboard/edit-slider');
    }

    // public function edit_popup()
    // {
    //     // $data['fetch'] = $this->Db_model->fetch_data();
    //     // $data =$this->Db_model->get_data('get_ammonium');
    //     // print_r($data);
    //     $this->load->view('dashboard/edit-popups');
    // }
    

   
}
