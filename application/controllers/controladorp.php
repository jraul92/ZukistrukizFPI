<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Welcome extends CI_Controller {
	



	public function Plib() {
		parent::__construct();
		$this -> load -> helper('url');
		$this->load->helper('librerias');
		$this -> load -> view('libreriasp');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

