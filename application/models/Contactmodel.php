<?php 

class contactmodel extends CI_Model{
	public function contact($array)
	{
		$name=$array['name'];
        $email=$array['email'];
        $message=$array['message'];
        $mobile=$array['mobile'];  
        return $this->db->insert('contact',['customer_name'=>$name,'customer_email'=>$email,'message'=>$message,'mobile'=>$mobile]);
	}
	public function all_contact()
    {
    	$q=$this->db
                 ->get('contact');

        return $q->result();
        
    }
}


 ?>
