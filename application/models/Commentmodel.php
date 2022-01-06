<?php

  class Commentmodel extends CI_Model{

    public function add_comments($array)
    {
        
        $name=$array['name'];
        $email=$array['email'];
        $comment=$array['comment'];
        $article_id=$array['article_id'];
        $time=$array['time'] ;  
        return $this->db->insert('comments',['user_name'=>$name,'email'=>$email,'comments'=>$comment,'createdOn'=>$time,'article_id'=>$article_id]);
    }
    public function article_comments($id)
    {
    	$q=$this->db->where('article_id',$id)
                     ->get('comments');

        return $q->result();
        
    }

  }



?>