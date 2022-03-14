<?php 

class ebookmodel extends CI_Model{
	public function add_ebook($array)
	{
		$name=$array['name'];
        $description=$array['desc'];
        $date=date("Y/m/d");
        $ebook_path=$array['ebook_path'];
        $banner_path=$array['banner_path'];  
        return $this->db->insert('ebook',['ebook_name'=>$name,'description'=>$description,'date'=>$date,'ebook_path'=>$ebook_path,'ebook_banner_path'=>$banner_path]);
	}
	public function all_ebook()
    {
    	$q=$this->db
                 ->get('ebook');

        return $q->result();
        
    }

    public function delete_ebook($id)
    {
        return $this->db
                    ->where('ebook_id',$id)
                    ->delete('ebook');
    }
}


 ?>
