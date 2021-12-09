<?php 

class Loginmodel extends CI_Model{

	public function validate_login($username,$password){

        // $this->load->database();  Autoloaded
        // $this->db;

        $q=$this->db->where(['uname'=>$username,'password'=>$password])
                      ->get('users');

        if($q->num_rows()){

        	// return TRUE;
        	return $q->row()->id;
        } 
        else{             

		return FALSE;
     	}
	}




}



 ?>