<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    

    public function index(){
        $this->load->model('user_model');
        $users=$this->user_model->all();
        $data=array();
        $data['users']=$users;
        $this->load->view('admin/common/header');
        $this->load->view('admin/ideas');
        $this->load->view('admin/common/footer');


    }

}

/* End of file Dashboard.php */
