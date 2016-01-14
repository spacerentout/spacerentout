<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
        function __construct(){
       
            parent::__construct(); 
            $this->load->helper(array('url'));
        }
    
	public function index()
	{
                $data['module'] = 'home';
		$this->load->view('template',$data);
	}
}
