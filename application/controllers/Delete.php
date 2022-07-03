<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Book');
		$this->load->helper('url');

	}

    public function hapus($id)
    {
            $this->Book->delete($id);
            $this->session->set_flashdata('flash', 'Buku Sukses Dihapus');
            redirect('welcome');
        
    }
}
