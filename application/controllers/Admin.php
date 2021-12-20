<?php

class Admin extends CI_Controller {

	public function index()
	{   
	
	}

	public function dashboard()
	{
	    
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
             
            'attributes'   =>  array('class' => 'page-link'),
        ];
        
        $this->pagination->initialize($config);
        $articles=$this->articlesmodel->article_list($config['per_page'],$this->uri->segment(3));
        $this->load->view('admin/dashboard',['articles'=>$articles]);

	}

    public function add_article()
    {   

    	$this->load->view('admin/add_articles');
    	
    }

    public function store_article()
    {
        $config=[

                'upload_path' => './uploads/articles',
                'allowed_types' =>'jpg|jpeg|png|gif',

        ];
        $this->load->library('upload',$config);

    	$this->load->library('form_validation');

    	if($this->form_validation->run('add_articles_rules') && $this->upload->do_upload('image')){
             
             $post=$this->input->post();
             
             $data=$this->upload->data();

             $image_path=base_url("uploads/articles/".$data['raw_name'].$data['file_ext']);

             $post['image_path']=$image_path; 
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
    	if($this->form_validation->run('add_articles_rules')){
             
             $post=$this->input->post();

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

       $article=$this->articlesmodel->delete_article($article_id);
       $this->session->set_flashdata('success',"Record Deleted..."); 	          
       return redirect('admin/dashboard');    
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
    	 

        function fixForUri($string){
            $slug = trim($string);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
            return $slug ;
                                
             }
             
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
             $post['slug']=fixForUri($post['name']);
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
    
    public function author_detail($slug)
    {
 
        $authors=$this->articlesmodel->find_author($slug);
        $this->load->view('admin/author_detail',['authors'=>$authors]);	
    }



    public function category()
    {

    	$category=$this->articlesmodel->category();
    	$this->load->view('admin/category',['category'=>$category]);
    }

    public function new_category()
    {

    	$this->load->view('admin/add_category');
    }

    public function add_category()
    {
    	$config=[

                'upload_path' => './uploads/category',
                'allowed_types' =>'jpg|jpeg|png|gif|svg',

                ];
        $this->load->library('upload',$config);

    	$this->load->library('form_validation');
    	if($this->form_validation->run('category_form_rules') && $this->upload->do_upload('image')){
             
             $post=$this->input->post();
             $data=$this->upload->data();
             $image_path=base_url("uploads/category/".$data['raw_name'].$data['file_ext']);

             $post['image_path']=$image_path; 
          
             if($this->articlesmodel->add_category($post)){
                  
                 $this->session->set_flashdata('success',"Category Inserted Successfully"); 	
                 return redirect('admin/category');
             }
             else{

                 $this->session->set_flashdata('faliure',"An Error Occurred!! Please try after sometime."); 	
                 return redirect('admin/category');
             }
    	} 

    	else{
            $upload_error=$this->upload->display_errors();
    		$this->load->view('admin/add_category',compact('upload_error'));
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
