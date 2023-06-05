<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DbCon extends CI_Controller
{
    public function __construct()  
    {
        parent::__construct();
        $this->load->model('Db_model');
        
    }

	#Aniket Sinare festival code
	public function festival_form($t)
    {
    		

    	if(isset($_POST['submit']))
    	{

    		if (isset($_POST['name']))
    		{
    			$data['name']=$this->input->post('name');
    			$this->form_validation->set_rules('name', 'Name','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['mobile_no']))
    		{
    			$data['mobile_no']=$this->input->post('mobile_no');
    			$this->form_validation->set_rules('mobile_no', 'Mobile No','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

    			if (isset($_POST['email']))
    		{
    			$data['email']=$this->input->post('email');
            	$this->form_validation->set_rules('email', 'Email', 'required|valid_email',array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['address']))
    		{
    			$data['address']=$this->input->post('address');
    			$this->form_validation->set_rules('address', 'Mobile No','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if ($this->input->post('festival_name')=="none")
    		{		
    			$this->form_validation->set_rules('festival_name', 'festival_name','callback_select_validate1');
    			$this->form_validation->set_message('select_validate1', 'Please select valid organization type.');
    			function select_validate1($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['festival_name']=$this->input->post('festival_name');    	}

			if (isset($_POST['board_name']))
    		{
    			$data['board_name']=$this->input->post('board_name');
    			$this->form_validation->set_rules('board_name', 'Board Name','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['public_b_addr']))
    		{
    			$data['public_b_addr']=$this->input->post('public_b_addr');
    			$this->form_validation->set_rules('public_b_addr', 'Public Board Address','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['circle_no']))
    		{
    			$data['circle_no']=$this->input->post('circle_no');
    			$this->form_validation->set_rules('circle_no', 'Circle Registration Number','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['tent_length']))
    		{
    			$data['tent_length']=$this->input->post('tent_length');
    			$this->form_validation->set_rules('tent_length', 'Tent length','required',
        				array('required'      => 'Please enter valid %s.',));
    		}
			if (isset($_POST['tent_width']))
    		{
    			$data['tent_width']=$this->input->post('tent_width');
    			$this->form_validation->set_rules('tent_width', 'Tent width','required',
        				array('required'      => 'Please enter valid %s.',));
    		}
			if (isset($_POST['p_of_tent']))
    		{
    			$data['p_of_tent']=$this->input->post('p_of_tent');
    			$this->form_validation->set_rules('p_of_tent', 'Place of tent','required',
        				array('required'      => 'Please enter valid %s.',));
    		}
			if (isset($_POST['date_of_const']))
    		{
    			$data['date_of_const']=$this->input->post('date_of_const');
    			$this->form_validation->set_rules('date_of_const', 'Date of Construction','required',
        				array('required'      => 'Please enter valid %s.',));
    		}
			if (isset($_POST['last_date_removal']))
    		{
    			$data['last_date_removal']=$this->input->post('last_date_removal');
    			$this->form_validation->set_rules('last_date_removal', 'last date removal','required',
        				array('required'      => 'Please enter valid %s.',));
    		}
			if (isset($_POST['place_of_arch']))
    		{
    			$data['place_of_arch']=$this->input->post('place_of_arch');
    			$this->form_validation->set_rules('place_of_arch', 'Place of Arch','required',
        				array('required'      => 'Please enter valid %s.',));
    		}
			if (isset($_POST['no_of_arches']))
    		{
    			$data['no_of_arches']=$this->input->post('no_of_arches');
    			$this->form_validation->set_rules('no_of_arches', 'number of arches','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['arch_height']))
    		{
    			$data['arch_height']=$this->input->post('arch_height');
    			$this->form_validation->set_rules('arch_height', 'Arch height','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['banner_no']))
    		{
    			$data['banner_no']=$this->input->post('banner_no');
    			$this->form_validation->set_rules('banner_no', 'Banner number','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['pavilian_area']))
    		{
    			$data['pavilian_area']=$this->input->post('pavilian_area');
    			$this->form_validation->set_rules('pavilian_area', 'Pavilian Area','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['address_of_place']))
    		{
    			$data['address_of_place']=$this->input->post('address_of_place');
    			$this->form_validation->set_rules('address_of_place', 'Address of place','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['details_prev']))
    		{
    			$data['details_prev']=$this->input->post('details_prev');
    			$this->form_validation->set_rules('details_prev', 'Previous Details','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['details_permission']))
    		{
    			$data['details_permission']=$this->input->post('details_permission');
    			$this->form_validation->set_rules('details_permission', 'Permission Details','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['mno']))
    		{
    			$data['mno']=$this->input->post('mno');
    			$this->form_validation->set_rules('mno', 'applicant obtained loudspeaker','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['xyz']))
    		{
    			$data['xyz']=$this->input->post('xyz');
    			$this->form_validation->set_rules('xyz', 'fire prevention','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['abc']))
    		{
    			$data['abc']=$this->input->post('abc');
    			$this->form_validation->set_rules('abc', 'pavilion','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['fav_language']))
    		{
    			$data['fav_language']=$this->input->post('fav_language');
    			$this->form_validation->set_rules('fav_language', 'enough road / sidewalk','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if ($this->input->post('nashik')=="none")
    		{		
    			$this->form_validation->set_rules('nashik', 'nashik','callback_select_validate2');
    			$this->form_validation->set_message('select_validate2', 'Please select valid type.');
    			function select_validate1($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['nashik']=$this->input->post('nashik');    	}
			
			if ($this->input->post('police')=="none")
    		{		
    			$this->form_validation->set_rules('police', 'police','callback_select_validate3');
    			$this->form_validation->set_message('select_validate3', 'Please select valid type.');
    			function select_validate1($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['police']=$this->input->post('police');    	}

			if ($this->input->post('city')=="none")
    		{		
    			$this->form_validation->set_rules('city', 'city','callback_select_validate4');
    			$this->form_validation->set_message('select_validate4', 'Please select valid type.');
    			function select_validate1($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['city']=$this->input->post('city');    	}

			if ($this->input->post('fire')=="none")
    		{		
    			$this->form_validation->set_rules('fire', 'fire','callback_select_validate5');
    			$this->form_validation->set_message('select_validate5', 'Please select valid type.');
    			function select_validate1($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['fire']=$this->input->post('fire');    	}

			if (isset($_POST['adhar']))
    		{
    			$data['adhar']=$this->input->post('adhar');
    			$this->form_validation->set_rules('adhar', 'AADHAAR CARD','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['list_board_member']))
    		{
    			$data['list_board_member']=$this->input->post('list_board_member');
    			$this->form_validation->set_rules('list_board_member', 'List of Board Officers','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['traffic']))
    		{
    			$data['traffic']=$this->input->post('traffic');
    			$this->form_validation->set_rules('traffic', 'Traffic - Guarantee (in sample)','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

			if (isset($_POST['tent_map']))
    		{
    			$data['tent_map']=$this->input->post('tent_map');
    			$this->form_validation->set_rules('tent_map', 'Tent Viewer Map','required',
        				array('required'      => 'Please upload valid %s.',));
    		}
    		

			
    	}
    	
		
    }

}


 