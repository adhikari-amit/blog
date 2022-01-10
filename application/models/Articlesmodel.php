<?php 

class Articlesmodel extends CI_Model{

   public function numofrows_all_articles()
   {

        $query=$this->db
                    ->select(['title','id'])
                    ->from('articles')
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
   public function animearticle_list($limit,$offset)
   {
        $type='anime';
        $query=$this->db
                    -> from ('articles')
                    ->where('categories',$type)
                    ->limit($limit,$offset)
                    ->order_by('created_at','DESC')
                    ->get();

        return $query->result();       
   }

   public function horrorarticle_list($limit,$offset)
   {    

        $type='horror';
        $query=$this->db
                    -> from ('articles')
                    ->where('categories',$type)
                    ->limit($limit,$offset)
                    ->order_by('created_at','DESC')
                    ->get();

        return $query->result();    
   }
    public function comedyarticle_list($limit,$offset)
   {    

        $type='comedy';
        $query=$this->db
                    -> from ('articles')
                    ->where('categories',$type)
                    ->limit($limit,$offset)
                    ->order_by('created_at','DESC')
                    ->get();

        return $query->result();    
   }
    public function thrillarticle_list($limit,$offset)
   {    

        $type='thrill';
        $query=$this->db
                    -> from ('articles')
                    ->where('categories',$type)
                    ->limit($limit,$offset)
                    ->order_by('created_at','DESC')
                    ->get();

        return $query->result();    
   }

   public function category_article($limit,$offset,$category)
   {
        $query=$this->db
                    ->from ('articles')
                    ->limit($limit,$offset)
                    ->where('categories',$category)
                    ->order_by('created_at','DESC')
                    ->get();

        return $query->result();    

   }
    public function related_articles($category)
    {
        $query=$this->db
                    ->from ('articles')
                    ->where('categories',$category)
                    ->order_by('id','DESC') 
                    ->limit(3)
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
        $slug=$array['slug'];
        $tag=$array['tag'];
        $tags=explode(',',$tag);

        $this->db->insert('articles',['title'=>$title,'author'=>$author,'categories'=>$category,'description'=>$description,'slug'=>$slug,'body'=>$body,'user_id'=>$user_id,'created_at'=>$created_at,'image_path'=>$image_path]);

        $this->db->where('title', $title);
        $this->db->select('id');
        $count = $this->db->get('articles')->row();

        foreach($tags as $t){
        $this->db->insert('article_tag',['article_id' => $count->id,'tag'=>$t]);

        }
        return TRUE;
    }
    

    public function tags(){
        
        $query=$this->db
                     ->distinct()
                     ->select('tag')
                     ->from('article_tag')
                     ->get();
        return $query->result();             
    }

    public function find_article($article_id)
    {
        $query=$this->db
                     ->from('articles')
                     ->where('id',$article_id)
                     ->get();

        return $query->row();             
    }
    public function find_article_tag($article_id)
    {
        $query=$this->db
                    ->select('tag')
                    ->from('article_tag')
                    ->where('article_id',$article_id)
                    ->get();

        return $query->result();     

    }

    public function update_article($array)
    { 

        $article_id=$array['article_id'];
        $title=$array['title'];
        $body=$array['article'];
        $author=$array['author'];
        $description=$array['desc'];
        $category=$array['category'];
        $created_at=$array['created_at'];
        $image_path=$array['image_path'];
        $tag=$array['tag'];
        $this->db  
            ->where('id',$article_id)
            ->update('articles',['title'=>$title,'author'=>$author,'categories'=>$category,'description'=>$description,'body'=>$body,'created_at'=>$created_at,'image_path'=>$image_path]);
     
        if($tag){
        $tags=explode(',',$tag);
        foreach($tags as $t){
        $this->db->insert('article_tag',['article_id' => $article_id,'tag'=>$t]);

        }
    }
        return TRUE;                     
    }


    public function delete_article($article_id)
    {
        return $this->db 
                    ->where('id',$article_id)
                    ->delete('articles');
    }
    public function topsix()
    {
        $q=$this->db
                ->select(['title','slug'])
                ->from('articles')
                ->order_by('id','DESC') 
                ->limit(6)
                ->get();
                
        return $q->result();            
    }
    public function most_viewd_articles()
    {
        $q=$this->db
                ->select(['title','slug','article_views'])
                ->from('articles')
                ->order_by('article_views','DESC') 
                ->limit(6)
                ->get();
                
        return $q->result();     

    }
    public function search($query,$limit,$offset)
    {

        $q=$this->db
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

    public function update_counter($slug)
    {   


        $this->db->where('slug', urldecode($slug))
                 ->select('article_views');
        $count = $this->db->get('articles')->row();
        $this->db->where('slug', urldecode($slug))
                 ->set('article_views', ($count->article_views + 1))
                 ->update('articles');
    }

    public function find($slug)
    {

        $q=$this->db                    
                -> from ('articles')
                -> where(['slug'=>$slug])
                ->get();
        if($q->num_rows()){

            return $q->row();
        }        
        else{

              return false;
        }
    }
   

   public function searchvia_tag($tag,$limit,$offset)
   {
       $query=$this->db
                    ->select('articles.*,article_tag.*')
                    ->from('articles')
                    ->where('tag',$tag)
                    ->join('article_tag','article_tag.article_id= articles.id','natural')
                    ->limit($limit,$offset)
                    ->get();
    
       return $query->result(); 
  
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

    public function delete_author($author_id)
    {
        return $this->db 
                    ->where('author_id',$author_id)
                    ->delete('author');
    }
   public function find_author($slug)
   {
       
        $q=$this->db                    
                -> from ('author')
                -> where(['slug'=>$slug])
                ->get();
        if($q->num_rows()){

            return $q->row();
        }        
        else{

              return false;
        }
   }
    public function update_author($array)
    { 

        $name=$array['name'];
        $instagram=$array['instagram'];
        $facebook=$array['facebook'];
        $twitter=$array['twitter'];
        $bio=$array['bio'];
        $image_path=$array['image_path'];
        $author_id=$array['author_id'];
        return  $this->db  
                    ->where('author_id',$author_id)
                    ->update('author',['name'=>$name,'instagram'=>$instagram,'facebook'=>$facebook,'twitter'=>$twitter,'bio'=>$bio,'image_path'=>$image_path]);                              
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
        $slug=$array['slug'];
        $image_path=$array['image_path'];
        return  $this->db->insert('category',['title'=>$title,'description'=>$desc,'slug'=>$slug,'image_path'=>$image_path]);   
    }
    
     public function delete_category($category_id)
    {
        return $this->db 
                    ->where('category_id',$category_id)
                    ->delete('category');
    }
    public function update_category($array)
    {
        $title=$array['title'];
        $desc=$array['desc'];
        $image_path=$array['image_path'];
        $category_id=$array['category_id'];
        return  $this->db  
                    ->where('category_id',$category_id)
                    ->update('category',['title'=>$title,'image_path'=>$image_path,'description'=>$desc]);     
    }
   public function find_category($slug)
   {
       
        $q=$this->db                    
                -> from ('category')
                -> where(['slug'=>$slug])
                ->get();
        if($q->num_rows()){

            return $q->row();
        }        
        else{

              return false;
        }
   }



}


 ?>