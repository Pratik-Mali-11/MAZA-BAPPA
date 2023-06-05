<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DbCon extends CI_Controller
{
    public function __construct()  
    {
        parent::__construct();
        $this->load->model('Db_model');
        
    }

    public function add($t)
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

    			if ($this->input->post('murti_type')=="none")
    		{		
    			$this->form_validation->set_rules('murti_type', 'murti_type','callback_select_validate1');
    			$this->form_validation->set_message('select_validate1', 'Please select valid Murti type');
    			function select_validate1($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['murti_type']=$this->input->post('murti_type');    	}


    			if ($this->input->post('division_name')=="none")
    		{    		
    			$this->form_validation->set_rules('division_name', 'Division Name','callback_select_validate2');
    			$this->form_validation->set_message('select_validate2', 'Please select valid Division Name.');

    			function select_validate2($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                		else {	return FALSE;   }
    			}

    		}else{$data['division_name']=$this->input->post('division_name');}

    		if ($this->input->post('pond_name')=="none")
    		{
    			$this->form_validation->set_rules('pond_name', 'Pond Name','callback_select_validate3');
    			$this->form_validation->set_message('select_validate3', 'Please select valid Pond Name.');

    			function select_validate3($str)
    			{ 		if($str=="none")
    					{ 	return TRUE;               }
                		else     {		return FALSE;	   }
    			}
    		}else{$data['pond_name']=$this->input->post('pond_name');}



    		if ($this->input->post('book_date')=="none")
    		{
    			$this->form_validation->set_rules('book_date', 'Book Date','callback_select_validate4');
    			$this->form_validation->set_message('select_validate4', 'Please select valid Booking date.');

    			function select_validate4($str)
    			{ 		if($str=="none")
    				{ 				return TRUE;               }
                	else {          return FALSE;              }
    			}

    		}else{    $data['book_date']=$this->input->post('book_date');	}


    		 if ($this->input->post('book_time')=="none")
    		{
    			$this->form_validation->set_rules('book_time', 'Book Time','callback_select_validate5');
    			$this->form_validation->set_message('select_validate5', 'Please select valid Booking slot time.');
    			function select_validate5($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else  {	  return FALSE;	           }
    			}

    		}else{  $data['book_time']=$this->input->post('book_time');	}

				if($this->form_validation->run())
				{	echo"form validation success...";
					$id=$this->Db_model->insertdata($t,$data);
					$str = substr($data['name'],0,4);
					$u_id = $id.$str."2021";

						if($this->Db_model->update_uid($u_id,$id,$t) AND $id!= false)
						{
				 	        // echo "Records Saved Successfully.";
				 	        // echo "<br>Your UserId is ".$u_id;
                            // popup cod
		 // 	        redirect('MainCon/');

						}else{	echo "Insert error !";		}
				}
				else{		echo validation_errors();		}
	
		}
	}

    public function add_ammonium($t)
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

    			if ($this->input->post('murti_type')=="none")
    		{		
    			$this->form_validation->set_rules('murti_type', 'murti_type','callback_select_validate1');
    			$this->form_validation->set_message('select_validate1', 'Please select valid Murti type');
    			function select_validate1($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['murti_type']=$this->input->post('murti_type');    	}




				if ($this->input->post('booking_type')=="none")
    		{		
    			$this->form_validation->set_rules('booking_type', 'Booking Type','callback_select_validate2');
    			$this->form_validation->set_message('select_validate2', 'Please select valid Booking type');
    			function select_validate2($str)
    			{ 		if($str=="none")
    					{	return TRUE;               }
                		else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['booking_type']=$this->input->post('booking_type');    	}
			

			if ($this->input->post('murti_weight')=="none")
    		{		
    			$this->form_validation->set_rules('murti_weight', 'murti_weight','callback_select_validate3');
    			$this->form_validation->set_message('select_validate3', 'Please select valid Murti weight');
    			function select_validate3($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['murti_weight']=$this->input->post('murti_weight');    	}
			

			if ($this->input->post('division_name')=="none")
    		{		
    			$this->form_validation->set_rules('division_name', 'division_name','callback_select_validate4');
    			$this->form_validation->set_message('select_validate4', 'Please select valid Division name');
    			function select_validate4($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['division_name']=$this->input->post('division_name');    	}

			if ($this->input->post('center_name')=="none")
    		{		
    			$this->form_validation->set_rules('center_name', 'center_name','callback_select_validate5');
    			$this->form_validation->set_message('select_validate5', 'Please select valid center  name');
    			function select_validate5($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['center_name']=$this->input->post('center_name');    	}

			
			

			var_dump($data);
			if($this->form_validation->run())
				{	echo"form validation success...";

					$id=$this->Db_model->insertdata($t,$data);
			$str = substr($data['name'],0,4);
			$u_id = $id.$str."2021";

			if($this->Db_model->update_uid($u_id,$id,$t))
			{
		 	        echo "Records Saved Successfully.";
		 	        echo "<br>Your UserId is ".$u_id;
		 	        // redirect('MainCon/');

		 	}
		 	else{
		 			echo "Insert error !";
		 	}

				}
				else{		echo validation_errors();		}


			    	}
    	
		
    }

    public function register_org($t)
    {
    		

    	if(isset($_POST['submit']))
    	{

    			if (isset($_POST['name']))
    		{
    			$data['name']=$this->input->post('name');
    			$this->form_validation->set_rules('name', 'Name','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

    		if ($this->input->post('org_type')=="none")
    		{		
    			$this->form_validation->set_rules('org_type', 'org_type','callback_select_validate1');
    			$this->form_validation->set_message('select_validate1', 'Please select valid organization type.');
    			function select_validate1($str)
    			{ 		if($str=="none")
    				{	return TRUE;               }
                else{   return FALSE;              }
    			}
    		
    		} 	else{   $data['org_type']=$this->input->post('org_type');    	}


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


    		if (isset($_POST['reg_date']))
    		{
    			$data['reg_date']=$this->input->post('reg_date');
    			$this->form_validation->set_rules('reg_date', 'Registration date','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

    		if (isset($_POST['reg_no']))
    		{
    			$data['reg_no']=$this->input->post('reg_no');
    			$this->form_validation->set_rules('reg_no', 'Registration number','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

    		if (isset($_POST['org_address']))
    		{
    			$data['org_address']=$this->input->post('org_address');
    			$this->form_validation->set_rules('org_address', 'organization address','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

    		if (isset($_POST['per_name']))
    		{
    			$data['per_name']=$this->input->post('per_name');
    			$this->form_validation->set_rules('per_name', 'Key-Person Name','required',
        				array('required'      => 'Please enter valid %s.',));
    		}

    		if (isset($_POST['total_member']))
    		{
    			$data['total_member']=$this->input->post('total_member');
    			$this->form_validation->set_rules('total_member', 'no. of volunteers','required',
        				array('required'      => 'Please enter valid %s.',));
    		}
    		
			$data['reg_certificate']=$this->input->post('reg_certificate');		

			var_dump($data);

			if($this->form_validation->run())
				{	echo"form validation success...";

					$id=$this->Db_model->insertdata($t,$data);
					$str = substr($data['name'],0,4);
					$org_id = $id.$str."2021";

					if($this->Db_model->update_uid($org_id,$id,$t))
					{
				 	        echo "Records Saved Successfully.";
				 	        echo "<br>Your OrgId is ".$org_id;
				 	        // redirect('MainCon/');

				 	}
				 	else{
				 			echo "Insert error !";
				 	}


				}else{		echo validation_errors();		}



			
    	}
    	
		
    }

    public function add_announcements()
    {
        if(isset($_POST['submit']))
        {
                if (isset($_POST['title']))
            {
                $data['title']=$this->input->post('title');
                $this->form_validation->set_rules('title', 'Title','required',
                        array('required'      => 'Please enter valid %s.',));
            }
            if (isset($_POST['link']))
            {
                $data['link']=$this->input->post('link');
                $this->form_validation->set_rules('link', 'Link','required',
                        array('required'      => 'Please enter valid %s.',));
            }

            if($this->form_validation->run())
                {
                   // echo"form validation success...";

                    $id=$this->Db_model->insertdata("announcement",$data);
                    
                    if($id!=false)
                    {
                            echo "Records Saved Successfully.";
                        // $this->session->set_flashdata('true', 'Announcement Added Successfully.');
                           
                            // redirect('MainCon/');

                    }
                    else{    echo "Error!";
                        // $this->session->set_flashdata('err', "Sorry! Can't add records.");
                    }
                }else{      echo validation_errors();       }
        }

    }

public function edit_announcements($id)
    {
        if(isset($_POST['submit']))
        {
                if (isset($_POST['title']))
            {
                $data['title']=$this->input->post('title');
                $this->form_validation->set_rules('title', 'Title','required',
                        array('required'      => 'Please enter valid %s.',));
            }
            if (isset($_POST['link']))
            {
                $data['link']=$this->input->post('link');
                $this->form_validation->set_rules('link', 'Link','required',
                        array('required'      => 'Please enter valid %s.',));
            }

            if($this->form_validation->run())
                {
                   // echo"form validation success...";
                     if($this->Db_model->updatedata($id,"announcement",$data))
                    {            echo "Records Saved Successfully.";
                        // $this->session->set_flashdata('true', 'Announcement Added Successfully.');
                           
                            // redirect('MainCon/');
                    }
                    else{    echo "Error!";}
                        // $this->session->set_flashdata('err', "Sorry! Can't add records.");
                
                }else{      echo validation_errors();       }
        }

    }

    public function delete_announcement($id)
    {
        $this->Db_model->deletedata($id,"announcement");
        
    }
    public function approve_org($id)
    {
            $data = array(  'approved' => 1,    );
            if($this->Db_model->updatedata($id,"org_registration",$data))
            {
                redirect('/Org-Reg-Data/');
            } 
            else
            {
                echo "cant approved it.";
            }

    }

    public function update_guidelines($id)
    {
        if(isset($_POST['submit']))
        {
            echo"guidelines submit".$id;
        }

    }


}







