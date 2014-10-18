<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Micontrolador	 extends CI_Controller {
		
		function __construct(){
			
			parent::__construct();
 
		$this->load->helper('form');
							}
		public function index ()
		{
			$this->load->helpers('url'); 
			$this->load->helpers('navegador_helper'); 
			$this->load->view('vista');
		}
		
	
}


?>
	