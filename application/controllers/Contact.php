<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function index()
	{
        $data['page']  = 'pages/contact/contact';
        $this->view($data);
	}
}
