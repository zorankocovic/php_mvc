<?php

class ErrorController extends Controller
{
    public function process($params)
    {
        // HTTP header
        header("HTTP/1.0 404 Not Found");
        // HTML header
        $this->head['title'] = 'Error 404';
        // Sets the template
        $this->view = 'error';
    }
public function view(){
 
      return  $this->view = '404';
    
  }

		public function data(){
  $viewdata['title']='Error page';
$viewdata['description']='Welcome to USC framework';
$viewdata['first']='Contact form';
$viewdata['last']='Welcom to USC framework';
$viewdata['base_url']='http://localhost/vezba/mvc/fuction_checked/';
    
	  return  $viewdata;
    
  }

}