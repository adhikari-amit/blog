<?php

  class Eventmodel extends CI_Model{

   public function add_participant($array)
   {
        $name=$array['name'];
        $email=$array['email'];
        $bio=$array['bio'];
        $instagram=$array['instagram'];
        $facebook=$array['facebook'];
        $twitter=$array['twitter'];
        $cover=$array['cover_path'];
        $categories=$array['categories'];
        $tags=$array['tags'];
        $article=$array['article_path'];

        return $this->db->insert('event',['author_name'=>$name,'author_email'=>$email,'author_bio'=>$bio,'author_facebook'=>$facebook,'author_instagram'=>$instagram,'author_twitter'=>$twitter,'categories'=>$categories,'tags'=>$tags,'article_cover '=>$cover,'article'=>$article]);
   }

   public function add_oldparticipant($array)
   {
      $email=$array['email'];
      $name=$array['name'];
      $bio=$array['bio'];
      $instagram=$array['instagram'];
      $facebook=$array['facebook'];
      $twitter=$array['twitter'];
      $categories=$array['categories'];
      $tags=$array['tags'];
      $cover=$array['cover_path'];
      $article=$array['article_path'];
      return $this->db->insert('event',['author_name'=>$name,'author_email'=>$email,'author_bio'=>$bio,'author_facebook'=>$facebook,'author_instagram'=>$instagram,'author_twitter'=>$twitter,'categories'=>$categories,'tags'=>$tags,'article_cover '=>$cover,'article'=>$article]);

   }

   public function article_list($limit,$offset)
   {
        $query=$this->db
                    ->limit($limit,$offset)
                    ->get('event');
        return $query->result();            

   }

   public function num_rows_event()
   {
        $query=$this->db
                    ->get('event');
        return $query->num_rows();               

   }

   public function delete_author_article($id)
   {
        return $this->db
                    ->where('event_id',$id)
                    ->delete('event');
   }
   
   public function author_detail($id)
   {
       $query=$this->db
                   ->where('event_id',$id)
                   ->get('event');
       return $query->row(); 
   }
 

  }



?>