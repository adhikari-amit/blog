<?php

class Login extends CI_Controller {

	public function index()
	{   
		if($this->session->userdata('user_id'))
		{
      return redirect('admin/dashboard');
		}
		$this->load->helper('form');
		$this->load->view('public/login');
	}

	public function admin_login()
	{
        
	$this->load->library('form_validation');

	if($this->form_validation->run('login_form_rules'))
	{
        
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $this->load->model("loginmodel");
        $login_id=$this->loginmodel->validate_login($username,$password);

        if($login_id)
        {

        $this->session->set_userdata('user_id',$login_id);     
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
