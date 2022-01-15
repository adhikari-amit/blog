<?php

  class Commentmodel extends CI_Model{

    public function add_comments($array)
    {
        
        $name=$array['name'];
        $comment=$array['comment'];
        $article_id=$array['article_id'];
        $time=$array['time'] ;  
        return $this->db->insert('comments',['user_name'=>$name,'comments'=>$comment,'createdOn'=>$time,'article_id'=>$article_id]);
    }
    public function article_comments($id)
    {
    	$q=$this->db->where('article_id',$id)
                     ->get('comments');

        return $q->result();
        
    }

    public function add_subscriber($array){

     $email=$array['email'];

     return $this->db->insert('subscribers',['email'=>$email]);

    }

    public function subscribers($limit,$offset)
    {
       $query=$this->db
                   ->select('email')
                   ->from('subscribers')
                   ->limit($limit,$offset)
                   ->get();
        return $query->result();           
    }
    public function all_subscribers()
    {
       $query=$this->db
                   ->select('email')
                   ->from('subscribers')
                   ->get();
        return $query->result();           
    }
     public function numberof_subscribers()
    {
       $query=$this->db
                   ->from('subscribers')
                   ->get();
        return $query->num_rows();           
    }

  }



?>