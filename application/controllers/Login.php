<?php

class Login extends CI_Controller {

	public function index()
	{   
		if($this->session->userdata('user_id')){
          return redirect('admin/dashboard');

		}
		$this->load->helper('form');
		$this->load->view('public/login');
	}

	public function admin_login()
	{
        
		$this->load->library('form_validation');

		// $this->form_validation->set_rules('username','User Name','required|alpha_numeric');
		// $this->form_validation->set_rules('password','Password','required');
		// Above mentioned rules are stored inside the config/form_validation.php

	if($this->form_validation->run('login_form_rules'))
	{
        
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $this->load->model("loginmodel");
        $login_id=$this->loginmodel->validate_login($username,$password);

        if($login_id)
        {
         	// $this->load->library('session');
          //  seession is included in the config/autoload.php

        $this->session->set_userdata('user_id',$login_id);
        	// After above opetaion we need to set a encryption key in the config/config.php
            
        return redirect('admin/dashboard');

        }
        else
        {

          $this->session->set_flashdata('login_faild',"Invalid Username/Password"); 	
          return redirect('login');
        }
	}

	else{
 
     $this->load->view('public/login');

	}

	}

	public function admin_logout()
	{
	    $this->session->unset_userdata('user_id');
	    return redirect('login');
	}
}
