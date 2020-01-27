<?php

class RouterController extends Controller
{
	
	protected $controller;
    protected $data = array();
	private function parseUrl($url)
	{
		
		$parsedUrl = parse_url($url);
		
		$parsedUrl["path"] = ltrim($parsedUrl["path"], "/");
		
		$parsedUrl["path"] = trim($parsedUrl["path"]);
		
		$explodedUrl = explode("/", $parsedUrl["path"]);
		return $explodedUrl;
	}

	
public static function camelCase($str, array $noStrip = [])
{
        
        $str = preg_replace('/[^a-z0-9' . implode("", $noStrip) . ']+/i', ' ', $str);
        $str = trim($str);
        $str = ucwords($str);
        $str = str_replace(" ", "", $str);
        $str = lcfirst($str);

        return $str;
}
	
	public function process($params)
	{
		$parsedUrl = $this->parseUrl($params[0]);

		if (empty($parsedUrl[0]))$this->redirect('article/home');
		
if (empty($parsedUrl[3]))$controllerClass ="IndexController";
else $controllerClass = $this->camelCase($parsedUrl[3]) . 'Controller';

$filename = 'controllers/'.$controllerClass.'.php';
		if (file_exists($filename)){


			$this->controller = new $controllerClass;}
		else
			$this->redirect('error');

	
		$this->controller->process($parsedUrl);

$this->data =$this->controller->data();
		$this->view =$this->controller->view();
	}
}