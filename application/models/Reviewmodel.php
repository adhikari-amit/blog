<?php 


class Reviewmodel extends CI_Model{

	public function review(){
		$query=$this->db
                   ->from('review')
                   ->get();
        return $query->result();       
	}
	 public function add_review($array)
    {
        
        $name=$array['name'];
        $comment=$array['comment'];
        $position=$array['position'];  
        return $this->db->insert('review',['client_name'=>$name,'client_position'=>$position,'comment'=>$comment]);
    }

}

 ?>