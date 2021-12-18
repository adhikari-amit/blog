<?php

class Admin extends CI_Controller {

	public function index()
	{   
	
	}

	public function dashboard()
	{
	    
        // $this->load->model('articlesmodel');
        // This model is loaded in construtor as we will use it repetatebly.

        // Pagination Logic
        $this->load->library('pagination');
        $config=[

        	'base_url'       => base_url('admin/dashboard'),
        	'per_page'       => 7,
        	'total_rows'     =>$this->articlesmodel->num_rows(),

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
        $articles=$this->articlesmodel->article_list($config['per_page'],$this->uri->segment(3));
        $this->load->view('admin/dashboard',['articles'=>$articles]);

	}

    public function add_article()
    {   
    	// $this->load->helper('form');
    	// this helper will be autoloaded in constructor
    	$this->load->view('admin/add_articles');
    	
    }

    public function store_article()
    {
        $config=[

                'upload_path' => './uploads',
                'allowed_types' =>'jpg|jpeg|png|gif',

        ];
        $this->load->library('upload',$config);

    	$this->load->library('form_validation');
    	// Article inpute validation are store inside the config/form_validation.php
    	if($this->form_validation->run('add_articles_rules') && $this->upload->do_upload('image')){
             
             $post=$this->input->post();
             
             $data=$this->upload->data();
             // echo "<pre>";
             // print_r($data);
             // exit;
             $image_path=base_url("uploads/".$data['raw_name'].$data['file_ext']);

             // echo $image_path;
             // exit;
              
             $post['image_path']=$image_path; 
             // $this->load->model('articlesmodel');
             if($this->articlesmodel->add_article($post)){
                  
                 $this->session->set_flashdata('success',"Article Inserted Successfully"); 	
                 return redirect('admin/dashboard');
             }
             else{

                 $this->session->set_flashdata('faliure',"An Error Occurred!! Please try after sometime."); 	
                 return redirect('admin/add_article');
             }
    	} 

    	else{
            $upload_error=$this->upload->display_errors();
    		$this->load->view('admin/add_articles',compact('upload_error'));
    	}
    }

    
    public function edit_article($article_id){
       
       // $this->load->helper('form');
       // $this->load->model('articlesmodel');
       $article=$this->articlesmodel->find_article($article_id);
       $this->load->view('admin/edit_articles',['article'=>$article]);
    }
    
    public function update_article()
    {
   
        
    	$this->load->library('form_validation');
    	// Article inpute validation are store inside the config/form_config.php
    	if($this->form_validation->run('add_articles_rules')){
             
             $post=$this->input->post();


             // $this->load->model('articlesmodel');
             if($this->articlesmodel->update_article($post)){
                
                 $this->session->set_flashdata('success',"Article Updated Successfully"); 	
                 return redirect('admin/dashboard');
             }
             else{

                 $this->session->set_flashdata('faliure',"An Error Occurred!! Please try after sometime."); 	
                 return redirect('admin/dashboard');
             }
    	} 

    	else{

    		$this->load->view('admin/add_articles');
    	}


    }

    public function delete_article($article_id)
    {

       // $this->load->helper('form');
       // $this->load->model('articlesmodel');
       $article=$this->articlesmodel->delete_article($article_id);
       $this->session->set_flashdata('success',"Record Deleted..."); 	          
       return redirect('admin/dashboard');    
    }

    public function category()
    {

    	$category=$this->articlesmodel->category();
    	$this->load->view('admin/category',['category'=>$category]);
    }
    public function authors()
    {

    	$authors=$this->articlesmodel->authors();
    	$this->load->view('admin/authors',['authors'=>$authors]);
    }
    
    public function new_authors()
    {

    	$this->load->view('admin/add_author');
    }

    public function add_author()
    {
    	
    	$config=[

                'upload_path' => './uploads/authors',
                'allowed_types' =>'jpg|jpeg|png|gif|svg',

                ];
        $this->load->library('upload',$config);

    	$this->load->library('form_validation');
    	if($this->form_validation->run('author_form_rules') && $this->upload->do_upload('image')){
             
             $post=$this->input->post();
             $data=$this->upload->data();
             $image_path=base_url("uploads/authors/".$data['raw_name'].$data['file_ext']);

             $post['image_path']=$image_path; 
          
             if($this->articlesmodel->add_author($post)){
                  
                 $this->session->set_flashdata('success',"Author Inserted Successfully"); 	
                 return redirect('admin/authors');
             }
             else{

                 $this->session->set_flashdata('faliure',"An Error Occurred!! Please try after sometime."); 	
                 return redirect('admin/authors');
             }
    	} 

    	else{
            $upload_error=$this->upload->display_errors();
    		$this->load->view('admin/add_author',compact('upload_error'));
    	}
    } 
   



	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('user_id')){
			return redirect('login');
	    }
        $this->load->model('articlesmodel');
        $this->load->helper('form');
	}


}
