<?php 

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
            // 'num_tag_open'   => "<li class='page-item'>",
            // 'num_tag_close'  =>"</li>",

            // 'cur_tag_open'   => "<li class='page-item active'><a class='page-link'>",
            // 'cur_tag_close'  =>"</a></li>",
             
             // For adding class to every anchar tag
            // 'attributes'   =>  array('class' => 'page-link'),
        ];
        
        $this->pagination->initialize($config);
        $articles=$this->articlesmodel->allarticle_list($config['per_page'],$this->uri->segment(3));
        $new_articles=$this->articlesmodel->topsix();
        $categories=$this->articlesmodel->category();
        $this->load->view('public/articles',['articles'=>$articles,'categories'=>$categories,'new_articles'=>$new_articles]);

    }

    public function search()
    {

      $this->load->library('form_validation');
      $this->form_validation->set_rules('query','Query','required');

      if(!$this->form_validation->run()){
        return $this->index();
      }
      
      $query=$this->input->post('query');

      return redirect ("blog/search_results/$query");
    }

    public function search_results($query)
    {

        $this->load->helper('form');
        $this->load->model('articlesmodel');
        $this->load->library('pagination');
        $config=[

            'base_url'       => base_url("blog/search_results/$query"),
            'per_page'       => 5,
            'uri_segment'    =>4,
            'total_rows'     =>$this->articlesmodel->numofrows_searched_articles($query),

            'full_tag_open'  => "<ul class='pagination pagination-sm'>",
            'full_tag_close' =>"</ul>",             
            
            'prev_link'      =>'&laquo;',
            'prev_tag_open'  => "<li class='page-item'>",
            'prev_tag_close' =>'</li>',
             
            'next_link'      =>'&raquo;' ,
            'next_tag_open'  => "<li class='page-item'>",
            'next_tag_close' =>'</li>',


            'num_tag_open'   => "<li class='page-item'>",
            'num_tag_close'  =>"</li>",

            'cur_tag_open'   => "<li class='page-item active'><a class='page-link'>",
            'cur_tag_close'  =>"</a></li>",
             
             // For adding class to every anchar tag
            'attributes'   =>  array('class' => 'page-link'),
        ];
        
        $this->pagination->initialize($config);
        $articles=$this->articlesmodel->search($query,$config['per_page'],$this->uri->segment(4));
        $this->load->view('public/search_result',['articles'=>$articles]);

    }


    public function article($article_slug)
    {   
        $this->load->helper('form');
        $this->load->model('articlesmodel');
        $articles=$this->articlesmodel->find($article_slug);
        $article_tag=$this->articlesmodel->find_article_tag($articles->id);
        $categories=$this->articlesmodel->category();
        $new_articles=$this->articlesmodel->topsix();
        $related_articles=$this->articlesmodel->related_articles($articles->categories);
        $this->add_count($article_slug);
        $this->load->view('public/article_detail',['article'=>$articles,'article_tag'=>$article_tag,'categories'=>$categories,'new_articles'=>$new_articles,'related_articles'=>$related_articles]);
    }
     
    public function category($category)
    {
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
  
    function add_count($article_slug)
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

}

 ?>