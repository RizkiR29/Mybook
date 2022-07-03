<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Book');
		$this->load->helper('url');

	}

    public function ubah()
    {
            $this->Book->update();
            $this->session->set_flashdata('flash', 'Buku Sukses Diedit');
            redirect('welcome');
    }
}
