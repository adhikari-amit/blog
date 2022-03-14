<?php 

class Loginmodel extends CI_Model{

	public function validate_login($username,$password){

       // $password1=md5($password);
       // print_r($password1);
       // exit();
        $q=$this->db->where(['uname'=>$username,'password'=>$password])
                      ->get('users');

        if($q->num_rows()){

        	return $q->row()->id;
        } 
        else{             

		return FALSE;
     	}
	}




}



 ?>