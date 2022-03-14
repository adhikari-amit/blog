<?php 

 defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller{

   public function index()
   {
    
    $this->load->library('pagination');
    $config=[

        'base_url'       => base_url('event'),
        'per_page'       => 5,
        'total_rows'     =>$this->workshopmodel->no_of_workshop(),

        'full_tag_open'  => "<div class='pagination-numbers'>",  
        'full_tag_close' => "</div>",             
        
        'cur_tag_open'   =>"<a class='page-numbers current'>",
        'cur_tag_close'  =>"</a> ",

        'num_tag_open'   =>"&nbsp",
        'num_tag_close'  =>"&nbsp",
        'attributes'     => array('class' => 'page-numbers'),

         
        'next_link'      =>"<span class='fa fa-angle-right'></span>" ,
        'prev_link'      =>"<span class='fa fa-angle-left'></span>" ,
        'last_link' => "Last",
        'first_link'=> "First",

    ];

    $this->pagination->initialize($config);

    $events=$this->workshopmodel->workshop($config['per_page'],$this->uri->segment(2));
    $topfour=$this->articlesmodel->topfour();
    $mostviewed_articles=$this->articlesmodel->most_viewd_articles();   
    $categories=$this->articlesmodel->category();
   	$this->load->view('event/event',['workshops'=>$events,'topfour'=>$topfour,'categories'=>$categories,'mostviewed_articles'=>$mostviewed_articles]);
   }
    
  public function eventdetails($slug="")
  {
    if($slug){
      $topfour=$this->articlesmodel->topfour();
      $mostviewed_articles=$this->articlesmodel->most_viewd_articles();   
      $categories=$this->articlesmodel->category();
      $event=$this->workshopmodel->workshop_byslug($slug);
      $this->load->view('event/eventdetails',['event'=>$event,'categories'=>$categories,'topfour'=>$topfour,'mostviewed_articles'=>$mostviewed_articles]);
    }
    else{
      return $this->index();
    }

  }
  public function __construct()
	{
		parent::__construct();
        $this->load->helper('form');
        $this->load->model('workshopmodel');
        $this->load->model('socialmodel');
        $this->load->model('articlesmodel');
	}

}

?>

