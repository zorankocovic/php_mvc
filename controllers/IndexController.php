<?php

class IndexController extends Controller
{
	/**
	 * Handles the contact form
	 * @param array $params Unused here
	 */
	public function process($params)
	{
		// Sets HTML meta-data
		$this->head = array(
			'title' => 'Contact form',
			'description' => 'Contact us using our email form.'
		);

	

		// Sets the view
		$this->view = 'someview';
	}
public function view(){
 
      return  $this->view = 'someview';
    
  }

		public function data(){
 $viewdata['title']='Welcome';
$viewdata['description']='Welcome to USC framework';
$viewdata['first']='Contact form';
$viewdata['last']='Welcome to USC framework';
$viewdata['base_url']='http://localhost/vezba/mvc/fuction_checked/';
    
	  return  $viewdata;
    
  }


}