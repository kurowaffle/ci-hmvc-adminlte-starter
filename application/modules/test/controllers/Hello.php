<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
    {
        $this->load->view("hello");
    }

	public function Admin()
    {
        $this->load->view("adminlte");
    }
}
