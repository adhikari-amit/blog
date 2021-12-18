<?php 

class Articlesmodel extends CI_Model{

   public function numofrows_all_articles()
   {

        $query=$this->db
                    ->select(['title','id'])
                    -> from ('articles')
                    ->get();

        return $query->num_rows();    
   }

   public function category()
   {
        $query=$this->db
                    ->select(['title'])
                    -> from ('category')
                    ->get();

        return $query->result();    
   }

   public function allarticle_list($limit,$offset)
   {
        $query=$this->db
                    -> from ('articles')
                    ->limit($limit,$offset)
                    ->order_by('created_at','DESC')
                    ->get();

        return $query->result();    
   }


	public function article_list($limit,$offset)
    {
         
        $user_id=$this->session->userdata('user_id');
        $query=$this->db
                    ->select(['title','id'])
                    -> from ('articles')
                    -> where ('user_id',$user_id)
                    ->limit($limit,$offset)
                    ->get();

        return $query->result();                

	}

    public function num_rows()
    {
        $user_id=$this->session->userdata('user_id');
        $query=$this->db
                    ->select(['title','id'])
                    -> from ('articles')
                    -> where ('user_id',$user_id)
                    ->get();

        return $query->num_rows();    
    }


    public function add_article($array)
    {   
        $title=$array['title'];
        $body=$array['article'];
        $user_id=$array['user_id'];
        $created_at=$array['created_at'];
        $image_path=$array['image_path'];
        return  $this->db->insert('articles',['title'=>$title,'body'=>$body,'user_id'=>$user_id,'created_at'=>$created_at,'image_path'=>$image_path]);
    }


    public function find_article($article_id)
    {
        $query=$this->db
                     ->select(['id','title','body'])
                     ->from('articles')
                     ->where('id',$article_id)
                     ->get();

        return $query->row();             
    }


    public function update_article($article)
    { 

        $article_id=$article['article_id'];
        $title=$article['title'];
        $body=$article['article'];
       
        return  $this->db  
                    ->where('id',$article_id)
                    ->update('articles',['title'=>$title,'body'=>$body]);                              
    }


    public function delete_article($article_id)
    {
        return $this->db 
                    ->where('id',$article_id)
                    ->delete('articles');
    }



    public function search($query,$limit,$offset)
    {

        $q=$this->db
                ->select(['id','title','body','created_at'])
                ->from('articles')
                ->like('title',$query)
                ->limit($limit,$offset)
                ->get();
        return $q->result();

    }

    public function numofrows_searched_articles($query)
    {
        $q=$this->db
                    ->select(['title','id'])
                    -> from ('articles')
                    -> like('title',$query)
                    ->get();

        return $q->num_rows();   
    }
    public function find($id)
    {

        $q=$this->db                    
                -> from ('articles')
                -> where(['id'=>$id])
                ->get();
        if($q->num_rows()){

            return $q->row();
        }        
        else{
        return false;
    }
    }

     public function authors()
   {
        $query=$this->db
                    -> from ('author')
                    ->get();

        return $query->result();    
   }

}


 ?>