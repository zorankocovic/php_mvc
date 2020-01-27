<?php

class ContactController extends Controller
{
	public $view;
	 public $viewdata = array();
	public function process($params)
	{
		// Sets HTML meta-data
		$this->head = array(
			'title' => 'Contact form',
			'description' => 'Contact us using our email form.'
		);

		// The form has been submitted?
		if (isset($_POST["email"]))
		{
			if ($_POST['abc'] == date("Y"))
			{
				$emailSender = new EmailSender(); // Instantiates a model
				$emailSender->send("admin@address.com", "Email from your website", $_POST['message'], $_POST['email']); // Calls the model
			}
		}
 
		$this->view = 'contact';
	}
	public function view(){
 
      return  $this->view = 'contact';
    
  }

		public function data(){
 //$viewdata->head = array(
//			'title' => 'Contact form',
	//	'description' => 'Contact us using our email form.'
	//	);
$viewdata['title']='Contact form';
$viewdata['description']='Contact us using our email form.';
$viewdata['base_url']='http://localhost/vezba/mvc/fuction_checked/';
      // $viewdata->base_url = "http://localhost/vezba/mvc/fuction_checked/";
	  
	  return  $viewdata;
    
  }


}