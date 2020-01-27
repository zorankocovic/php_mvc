<?php

class BaseController extends Controller
{
	//public $db;
public $users;
	public function process($params)
	{
		// Sets HTML meta-data
		$this->head = array(
			'title' => 'database',
			'description' => 'Contact us using our email form.'
		);


$users = new BaseModel();
$this->users = $users->get();
//		$this->view = 'view';

	}

	public function view(){
 
      return  $this->view = 'view';
    
  }
		public function data(){
 //$viewdata->head = array(
//			'title' => 'Contact form',
	//	'description' => 'Contact us using our email form.'
	//	);
$viewdata['title']='Contact form';
$viewdata['description']='Contact us using our email form.';
$viewdata['base_url']='http://localhost/vezba/mvc/fuction_checked/';
$viewdata['users']=$this->users;
      // $viewdata->base_url = "http://localhost/vezba/mvc/fuction_checked/";
	  
	  return  $viewdata;
    
  }

}