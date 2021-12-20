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
        $author=$array['author'];
        $user_id=$array['user_id'];
        $description=$array['desc'];
        $category=$array['category'];
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

    public function find($title)
    {

        $q=$this->db                    
                -> from ('articles')
                -> where(['title'=>$title])
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
                    ->from ('author')
                    ->get();

        return $query->result();    
   }

   public function add_author($array)
   {
        $name=$array['name'];
        $instagram=$array['instagram'];
        $facebook=$array['facebook'];
        $twitter=$array['twitter'];
        $slug=$array['slug'];
        $bio=$array['bio'];
        $image_path=$array['image_path'];
        return  $this->db->insert('author',['name'=>$name,'instagram'=>$instagram,'facebook'=>$facebook,'twitter'=>$twitter,'slug'=>$slug,'bio'=>$bio,'image_path'=>$image_path]);
   }

   public function category()
   {
        $query=$this->db
                    ->from('category')
                    ->get();

        return $query->result();    
   }


   public function add_category($array)
   {
        $title=$array['title'];
        $desc=$array['desc'];
        $image_path=$array['image_path'];
        return  $this->db->insert('category',['title'=>$title,'description'=>$desc,'image_path'=>$image_path]);   
    }

}


 ?>