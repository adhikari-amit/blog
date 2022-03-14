<?php 

class Adminworkshop extends CI_Controller{
    

    public function index()
    {
    	return redirect('adminworkshop/workshop');
    }

	public function workshop()
	{   
		$this->load->library('pagination');
        $config=[

        	'base_url'       => base_url('adminworkshop/workshop'),
        	'per_page'       => 7,
        	'total_rows'     =>$this->workshopmodel->no_of_workshop(),

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
        $workshops=$this->workshopmodel->workshop($config['per_page'],$this->uri->segment(3));
        $this->load->view('adminworkshop/dashboard',['workshops'=>$workshops]);
	}
    
    public function add_workshop()
    {
    	$this->load->view('adminworkshop/add_workshop');
    }

    public function store_workshop()
    {
    	  function fixForUrl($string){
            $slug = trim($string);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
            return $slug ;
                                
             }
             
    	$config=[

                'upload_path' => './uploads/workshop',
                'allowed_types' =>'jpg|jpeg|png|gif|svg',

                ];
        $this->load->library('upload',$config);

    	$this->load->library('form_validation');
    	if($this->form_validation->run('workshop_form_rules') && $this->upload->do_upload('image')){

             $post=$this->input->post();
             $post['slug']=fixForUrl($post['name']);
             $data=$this->upload->data();
             $image_path=base_url("uploads/workshop/".$data['raw_name'].$data['file_ext']);
             $post['image_path']=$image_path;           
             if($this->workshopmodel->add_workshop($post)){
                  
                 $this->session->set_flashdata('success',"Workshop Inserted Successfully"); 	
                 return redirect('adminworkshop/workshop');
             }
             else{

                 $this->session->set_flashdata('faliure',"An Error Occurred!! Please try after sometime."); 	
                 return redirect('adminworkshop/workshop');
             }
    	} 

    	else{
            $upload_error=$this->upload->display_errors();
    		$this->load->view('adminworkshop/add_workshop',compact('upload_error'));
    	}
    }

    public function edit_workshop($workshop_id="")
    {
    	if ($workshop_id) {
    		$workshop=$this->workshopmodel->find_workshop($workshop_id);
    		$this->load->view('adminworkshop/edit_workshop',['workshop'=>$workshop]);
    	}
        else{
        	return redirect('adminworkshop/workshop');
        }
    	
    }

    public function update_workshop()
    {		     
    	$config=[

                'upload_path' => './uploads/workshop',
                'allowed_types' =>'jpg|jpeg|png|gif|svg',

                ];
        $this->load->library('upload',$config);

    	$this->load->library('form_validation');
    	if($this->form_validation->run('workshop_form_rules') && $this->upload->do_upload('image')){

             $post=$this->input->post();
             $data=$this->upload->data();
             $image_path=base_url("uploads/workshop/".$data['raw_name'].$data['file_ext']);
             $post['image_path']=$image_path;           
             if($this->workshopmodel->update_workshop($post)){                  
                 $this->session->set_flashdata('success',"Workshop Updated Successfully"); 	
                 return redirect('adminworkshop/workshop');
             }
             else{

                 $this->session->set_flashdata('faliure',"An Error Occurred!! Please try after sometime."); 	
                 return redirect('adminworkshop/workshop');
             }
    	} 

    	else{
    		$post=$this->input->post();
            $upload_error=$this->upload->display_errors();
            $workshop_id=$post['workshop_id'];
            $workshop=$this->workshopmodel->find_workshop($workshop_id);
    		$this->load->view('adminworkshop/edit_workshop',['workshop'=>$workshop,'upload_error'=>$upload_error]);
    	}
	}
    
    public function delete_workshop($workshop_id="")
    {   
    	if($workshop_id){
    	  $this->workshopmodel->delete_workshop($workshop_id);
    	  $this->session->set_flashdata('success',"Workshop Deleted Successfully");
        }
    	  return redirect('adminworkshop/workshop');
    }

    public function upcoming_workshop()
    {   

        $this->load->library('pagination');
        $config=[

            'base_url'       => base_url('adminworkshop/upcoming_workshop'),
            'per_page'       => 7,
            'total_rows'     =>$this->workshopmodel->no_of_upcomingworkshop(),

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
       
        $workshop=$this->workshopmodel->upcoming_workshop($config['per_page'],$this->uri->segment(3));
        $this->load->view('adminworkshop/upcoming_workshop',['workshops'=>$workshop]);
    }

    public function write_invitation($workshop_id='')
    {
        if($workshop_id){
            $this->load->view('adminworkshop/write_invitation',['workshop_id'=>$workshop_id]);
        }
        else{
            return redirect('upcoming_workshop');
        }
    }

    public function send_invitation()
    {  
        $post=$this->input->post();
        $workshop_id=$post['workshop_id'];  
        $candidates=$this->workshopmodel->registered_candidate($workshop_id);
        
        $this->load->library('email');
        $this->email->from('adhikariamit2001@gmail.com', 'Amit');

        foreach ($candidates as $candidate) {
            $this->email->to($candidate->email);
            $this->email->subject($post['subject']);
            $this->email->message($post['message']);
            $this->email->send();
        }
    }

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('user_id'))
		{
			return redirect('login');
	    }
        $this->load->helper('form');
        $this->load->model('workshopmodel');
	}
}

?>

