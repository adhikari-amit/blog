
<?php 

class Socialmodel extends CI_Model{

	public function sociallinks(){

        $id=1;
        $q=$this->db
                ->where('social_id',$id)
                ->get('sociallinks');

        if($q->num_rows()){

        	return $q->row();
        } 
        else{             

		return FALSE;
     	}
	}

	public function update_sociallinks($array)
    {
        $whatsapp=$array['whatsapp'];
        $facebook=$array['facebook'];
        $twitter=$array['twitter'];
        $linkedin=$array['linkedin'];
        $instagram=$array['instagram'];
        $social_id=$array['social_id'];

        return $this->db
                    ->where('social_id',$social_id)
                    ->update('sociallinks',['whatsapp'=>$whatsapp,'facebook'=>$facebook,'twitter'=>$twitter,'linkedin'=>$linkedin,'instagram'=>$instagram]);
       
    }

}

 ?>


