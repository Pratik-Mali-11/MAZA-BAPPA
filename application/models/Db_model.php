<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Db_model extends CI_Model 
{
	function __construct()
    {
         parent::__construct();
    }

	public function login($email, $password)	//Get user by email and Password
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('active', 'Publish');
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }


    public function get_type($email, $password)
    {
        //SELECT `type` FROM `users` WHERE email= 'admin@gmail.com' AND password = 'admin'

        $this->db->select('type');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        $type =  $query->result();
        return $type[0];
    }



    public function fetch_data() //for fetching admins from user table
    {
        $this->db->SELECT('*');
        $t = $this->db->get('users');
        return $t;
    }

	public function insertdata($t,$data) // insert  data to table and return id of last inserted row
	{

        if($this->db->insert($t,$data))
         {	$insert_id = $this->db->insert_id();
  			return  $insert_id;
   		}else {return false;}
	}

  public function updatedata($id,$t,$data)           //To update data by id
   {
        $this->db->set($data);
        $this->db->where('id', $id);
        if($this->db->update($t))
        {
            return true;  
        }else{return false;}
   }

   public function deletedata($id,$t)               //To delete data by id
   {
               if($this->db->delete($t, array('id' => $id)))
               {
                return true;
               }
               else{return false;}

   }


	public function update_uid($uid,$id,$t) // update user-id and org-id in database
	{  
            if($t=="org_registration")
	   {
		      $data = array(	'org_id' => $uid,    );
	   }else{
		      $data = array(      'user_id' => $uid,  );
	   }
		$this->db->set($data);
		$this->db->where('id', $id);
        if($this->db->update($t))
        {
        	return true;  
        }else{return false;}
	}

  public function get_data($t)        //to retrive complete tablename
    {  
         
        $query = $this->db->get($t);
        $result = $query->result();
        return $result;
    }

    public function get_reg_org_data($t)        //to retrive registred org data
    {  
        $this->db->select('*');
        $this->db->where('approved',0); 
        $query = $this->db->get($t);
        $result = $query->result();
        return $result;
    }

    public function get_apr_org_data($t)        //to retrive approved org data
    {   
        $this->db->select('*');
        $this->db->where('approved',1); 
        $query = $this->db->get($t);
        $result = $query->result();
        return $result;
    }

   public function get_by_id($id,$t)            //to retrive data by id
   {
      $this->db->select('*');
      $this->db->where('id',$id);
      $query = $this->db->get($t);
      $result = $query->result();
        return $result;
   }

   public function get_by_pagename($Name) //To retrive complete row of given name

    {
        $query = $this->db->like('pagename', $Name);
        $result = $query->get('guideline_popups')->result();
        return $result;
    }

   


	
}

