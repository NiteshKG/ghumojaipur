<?php   
class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('user_model');
    }



public function index(){
    
    $this->load->view('admin/login');
}

public function login_action() {
    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run()){ 
      
        $data['name'] = $this->input->post('name');
        $data['password'] = $this->input->post('password');
        $login = $this->user_model->login($data);
   
    if ($login) { 

        $userdata = array(
            'name' => $name,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($userdata);
        
        redirect(base_url().'index.php/home/dashboard/');
    } else {
       
        $this->session->set_flashdata('msg', 'Invalid username or password');
        redirect(base_url().'index.php/admin/login/index/');
    }
}
else{
    $this->load->view('admin/login');
    
   
}

}



}




?>