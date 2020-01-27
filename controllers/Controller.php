<?php


abstract class Controller
{

    protected $data = array();
   
    protected $view = "";
   
	protected $head = array('title' => '', 'description' => '');
protected $base_url =  "";
    
function __construct() {
	$base_url =  "YOUR BASE URL";

}
    public function loadView()
    {
        if ($this->view)
        {
            extract($this->data);
            require("views/" . $this->view . ".php");
        }
    }

 
	public function redirect($url)
	{
		header("Location:".$this->base_url."$url");
		header("Connection: close");
        exit;
	}

  
    abstract function process($params);

}
