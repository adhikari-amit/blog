<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
    

    public function index()
    {   

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
        $anime=$this->articlesmodel->category_article($config['per_page'],$this->uri->segment(4),'anime');
        $horror=$this->articlesmodel->category_article($config['per_page'],$this->uri->segment(4),'horror');
        $thrill=$this->articlesmodel->category_article($config['per_page'],$this->uri->segment(4),'thrill');
        $comedy=$this->articlesmodel->category_article($config['per_page'],$this->uri->segment(4),'comedy');
        
        $new_articles=$this->articlesmodel->topsix();
        $mostviewed_articles=$this->articlesmodel->most_viewd_articles();
        $categories=$this->articlesmodel->category();
        $view=$this->articlesmodel->total_view();
        $tags=$this->articlesmodel->tags();
        $this->load->view('public/articles',['anime'=>$anime,'horror'=>$horror,'thrill'=>$thrill,'comedy'=>$comedy,'categories'=>$categories,'new_articles'=>$new_articles,'most_articles'=>$mostviewed_articles,'tags'=>$tags,'total_view'=>$view]);

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

        $this->load->library('pagination');
         $config=[

            'base_url'       => base_url("blog/search/$query"),
            'per_page'       => 8,
            'total_rows'     =>$this->articlesmodel->numofrows_searched_articles($query),

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
        $mostviewed_articles=$this->articlesmodel->most_viewd_articles();
        $categories=$this->articlesmodel->category();
        $tags=$this->articlesmodel->tags();
        $this->load->view('public/result',['articles'=>$articles,'categories'=>$categories,'new_articles'=>$new_articles,'most_articles'=>$mostviewed_articles,'tags'=>$tags]);
      }
      else{
        return redirect('blog');
      }
    }


    public function article($article_slug="")
    {   
        if($article_slug){
        $articles=$this->articlesmodel->find($article_slug);
        $author=$this->articlesmodel->find_article_author($articles->author);
        $article_tag=$this->articlesmodel->find_article_tag($articles->id);
        $categories=$this->articlesmodel->category();
        $new_articles=$this->articlesmodel->topsix();
        $mostviewed_articles=$this->articlesmodel->most_viewd_articles();
        $tags=$this->articlesmodel->tags();
        $comments=$this->commentmodel->article_comments($articles->id);
        $related_articles=$this->articlesmodel->related_articles($articles->categories);
        $this->add_count($article_slug);
        $this->load->view('public/article_detail',['article'=>$articles,'article_tag'=>$article_tag,'categories'=>$categories,'new_articles'=>$new_articles,'most_articles'=>$mostviewed_articles,'related_articles'=>$related_articles,'comments'=>$comments,'tags'=>$tags,'author'=>$author]);
      }
      else{
        return redirect('blog');
      }
    }

     
    public function category($category="")
    {   
        if($category){

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
        $mostviewed_articles=$this->articlesmodel->most_viewd_articles();
        $categories=$this->articlesmodel->category();
        $tags=$this->articlesmodel->tags();
        $this->load->view('public/result',['articles'=>$articles,'categories'=>$categories,'new_articles'=>$new_articles,'most_articles'=>$mostviewed_articles,'tags'=>$tags]);
       }
       else{

        return redirect('blog');
       }
    }
    
    public function author($slug="")
    {
        if($slug){

            $author=$this->articlesmodel->find_author($slug);
            $author_blog=$this->articlesmodel->find_author_blog($author->name);
            $this->load->view('public/author',['author'=>$author,'author_blog'=>$author_blog]);
        }
        else{
            return redirect('blog');
        }
    }
    public function tag($tags="")
    {
       if($tags){
        $this->load->library('pagination');
        $config=[

            'base_url'       => base_url("blog/tag/$tags"),
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
        $articles=$this->articlesmodel->searchvia_tag($tags,$config['per_page'],$this->uri->segment(4));
        $new_articles=$this->articlesmodel->topsix();
        $mostviewed_articles=$this->articlesmodel->most_viewd_articles();
        $categories=$this->articlesmodel->category();
        $tags=$this->articlesmodel->tags();
        $this->load->view('public/result',['articles'=>$articles,'categories'=>$categories,'new_articles'=>$new_articles,'most_articles'=>$mostviewed_articles,'tags'=>$tags]);
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
            $this->articlesmodel->update_counter(urldecode($article_slug));
        }
    }
    public function add_comments()
    {

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

    public function newslatter()
    {
        $this->load->library('form_validation');
        if($this->form_validation->run('subscribe_form_rules')){
             
            $post=$this->input->post();      
            $this->commentmodel->add_subscriber($post);
            return redirect('blog');
        }

        else{
           $this->index();
        }


    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('articlesmodel');
        $this->load->model('commentmodel');
        $this->load->helper('form');
    }


}

 ?>