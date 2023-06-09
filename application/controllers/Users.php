<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper(array('url'));
        $this->load->library('form_validation');
        $this->load->model('Db_model');
    }

    private function logged_in()
    {
        if (!$this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

    public function login()
    {
        $data['title'] = "Login";

        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == false) {
            $this->load->view('users/login', $data);
        } else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));

            $user = $this->Db_model->login($email, $password);            
            $res = $this->Db_model->get_type($email, $password);


            
            if ($user AND $res->type=="admin") {
                                // echo"Admin user";

                $userdata = array(
                    'id' => $user->id,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'authenticated' => TRUE
                );

                $this->session->set_userdata($userdata);

                redirect('dashboard');
                // echo $userdata;
            } 
            elseif ($user AND $res->type=="division") {
                    $userdata = array(
                    'id' => $user->id,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'authenticated' => TRUE
                );

                $this->session->set_userdata($userdata);

                redirect('Division');
            }
            else {
                $this->session->set_flashdata('message', 'Error - Invalid Email or Password!!');
                redirect('login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
