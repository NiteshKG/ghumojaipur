<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    

    public function index(){
        $this->load->model('user_model');
        $data['users']=$this->user_model->all();
       
       $this->load->view('admin/common/header');
       $this->load->view('admin/ideas',$data);
       $this->load->view('admin/common/footer');
    //    echo json_encode($data);

    }

    public function index_view(){
        $this->load->model('user_model');
        $data['users']=$this->user_model->all();
       
        $this->load->view('admin/common/header');
        $this->load->view('admin/ideas',$data);
        $this->load->view('admin/common/footer');
      

    }
    public function update(){
        $this->load->model('user_model');
        $data['users']=$this->user_model->news();
       
        echo json_encode($data);

    }

    public function update_view(){
        $this->load->model('user_model');
        $data['users']=$this->user_model->news();
        $this->load->view('admin/common/update');
        $this->load->view('admin/get_involved');
        $this->load->view('admin/common/footer');
    }

    public function work(){ 
        $this->load->model('user_model');
        $data['users']=$this->user_model->involved();
        $this->load->view('admin/common/header');
        $this->load->view('admin/get_involved',$data);
        $this->load->view('admin/common/footer');
    }
    public function work_view(){
        $this->load->model('user_model');
        $data['users']=$this->user_model->involved();
        $this->load->view('admin/common/header');
        $this->load->view('admin/get_involved');
        $this->load->view('admin/common/footer');
    }
    

}

/* End of file Dashboard.php */
