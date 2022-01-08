<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
    

    public function index()
    {   
        $this->load->helper('form');
        $this->load->model('articlesmodel');
        $this->load->library('pagination');
        $config=[

            'base_url'       => base_url('blog/index'),
            'per_page'       => 8,
            'total_rows'     =>$this->articlesmodel->numofrows_all_articles(),

            'full_tag_open'  => "<div class='blog-left-right-links'>",  
            'full_tag_close' => "</div>",             
            
            'prev_link'      => "<p> Newer </p>",
            'prev_tag_open'  => "<div class='blog-left-link'>", 
            'prev_tag_close' =>"</div>",
             
            'next_link'      =>'<p> Older </p>' ,
            'next_tag_open'  => "<div class='blog-right-link'>",
            'next_tag_close' =>"</div>",

            'display_pages'  => FALSE,
        ];
        
        $this->pagination->initialize($config);
        $articles=$this->articlesmodel->allarticle_list($config['per_page'],$this->uri->segment(3));
        $new_articles=$this->articlesmodel->topsix();
        $categories=$this->articlesmodel->category();
        $tags=$this->articlesmodel->tags();
        $this->load->view('public/articles',['articles'=>$articles,'categories'=>$categories,'new_articles'=>$new_articles,'tags'=>$tags]);

    }

    public function search_item()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('query','Query','required');

        if(!$this->form_validation->run()){
          return $this->index();
        }
      
        $query=$this->input->post('query');
        if($query){
            return redirect ("blog/search/$query");
        }
        else{
            return redirect("blog");
        }
    }

    public function search($query="")
    {
        if($query){
        $this->load->helper('form');
        $this->load->model('articlesmodel');
        $this->load->library('pagination');
         $config=[

            'base_url'       => base_url("blog/search/$query"),
            'per_page'       => 8,
            'total_rows'     =>$this->articlesmodel->numofrows_all_articles(),

            'full_tag_open'  => "<div class='blog-left-right-links'>",  
            'full_tag_close' => "</div>",             
            
            'prev_link'      => "<p> Newer </p>",
            'prev_tag_open'  => "<div class='blog-left-link'>", 
            'prev_tag_close' =>"</div>",
             
            'next_link'      =>'<p> Older </p>' ,
            'next_tag_open'  => "<div class='blog-right-link'>",
            'next_tag_close' =>"</div>",

            'display_pages'  => FALSE,
        ];
        
        $this->pagination->initialize($config);
        $articles=$this->articlesmodel->search($query,$config['per_page'],$this->uri->segment(4));
        $new_articles=$this->articlesmodel->topsix();
        $categories=$this->articlesmodel->category();
        $this->load->view('public/result',['articles'=>$articles,'categories'=>$categories,'new_articles'=>$new_articles]);
      }
      else{
        return redirect('blog');
      }
    }


    public function article($article_slug="")
    {   
        if($article_slug){
        $this->load->helper('form');
        $this->load->model('articlesmodel');
        $this->load->model('commentmodel');
        $articles=$this->articlesmodel->find($article_slug);
        $article_tag=$this->articlesmodel->find_article_tag($articles->id);
        $categories=$this->articlesmodel->category();
        $new_articles=$this->articlesmodel->topsix();
        $comments=$this->commentmodel->article_comments($articles->id);
        $related_articles=$this->articlesmodel->related_articles($articles->categories);
        $this->add_count($article_slug);
        $this->load->view('public/article_detail',['article'=>$articles,'article_tag'=>$article_tag,'categories'=>$categories,'new_articles'=>$new_articles,'related_articles'=>$related_articles,'comments'=>$comments]);
      }
      else{
        return redirect('blog');
      }
}

     
    public function category($category="")
    {   
        if($category){
        $this->load->helper('form');
        $this->load->model('articlesmodel');
        $this->load->library('pagination');
        $config=[

            'base_url'       => base_url("blog/category/$category"),
            'per_page'       => 8,
            'total_rows'     =>$this->articlesmodel->numofrows_all_articles(),

            'full_tag_open'  => "<div class='blog-left-right-links'>",  
            'full_tag_close' => "</div>",             
            
            'prev_link'      => "<p> Newer </p>",
            'prev_tag_open'  => "<div class='blog-left-link'>", 
            'prev_tag_close' =>"</div>",
             
            'next_link'      =>'<p> Older </p>' ,
            'next_tag_open'  => "<div class='blog-right-link'>",
            'next_tag_close' =>"</div>",

            'display_pages'  => FALSE,
        ];
        
        $this->pagination->initialize($config);
        $articles=$this->articlesmodel->category_article($config['per_page'],$this->uri->segment(4),$category);
        $new_articles=$this->articlesmodel->topsix();
        $categories=$this->articlesmodel->category();
        $this->load->view('public/articles',['articles'=>$articles,'categories'=>$categories,'new_articles'=>$new_articles]);
       }
       else{

        return redirect('blog');
       }
    }
  
    private function add_count($article_slug)
    {
   
        $this->load->helper('cookie');
        $check_visitor = $this->input->cookie(urldecode($article_slug), FALSE);
        $ip = $this->input->ip_address();
  
        if ($check_visitor == false) {
            $cookie = array(
                "name"   => urldecode($article_slug),
                "value"  => "$ip",
                "expire" =>  time() + 3600*24,
                "secure" => false
            );
            $this->input->set_cookie($cookie);
            $this->load->model('articlesmodel');
            $this->articlesmodel->update_counter(urldecode($article_slug));
        }
    }
    public function add_comments()
    {
        $this->load->helper('form');
        $this->load->model('commentmodel');
        $this->load->library('form_validation');
        if($this->form_validation->run('comment_form_rules')){
             
            $post=$this->input->post();
            $slug=$post['article_slug'];        
            $this->commentmodel->add_comments($post);
            return redirect("blog/article/{$slug}");
        }

        else{
           
            $post=$this->input->post();
            $article_slug=$post['article_slug'];
            $this->load->helper('form');
            $this->load->model('articlesmodel');
            $this->load->model('commentmodel');
            $articles=$this->articlesmodel->find($article_slug);
            $article_tag=$this->articlesmodel->find_article_tag($articles->id);
            $categories=$this->articlesmodel->category();
            $new_articles=$this->articlesmodel->topsix();
            $comments=$this->commentmodel->article_comments($articles->id);
            $related_articles=$this->articlesmodel->related_articles($articles->categories);
            $this->add_count($article_slug);
            $this->load->view('public/article_detail',['article'=>$articles,'article_tag'=>$article_tag,'categories'=>$categories,'new_articles'=>$new_articles,'related_articles'=>$related_articles,'comments'=>$comments]);
        } 
    }

}

 ?>