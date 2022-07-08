<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $this->load->model('kegiatan_model','kegiatan');
        $data['list_event']=$this->kegiatan->getAll();
        
        $this->load->view('home/index', $data);
    }
}
