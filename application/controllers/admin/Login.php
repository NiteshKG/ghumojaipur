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
    $this->form_validation->set_rules('email' ,'email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run()){ 
      
        $data['email'] = $this->input->post('email');
        $data['password'] = md5($this->input->post('password'));
        $login = $this->user_model->login($data);
   
    if ($login) { 

        $userdata = array(
            'name' => $name,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($userdata);
        
        redirect(base_url().'admin/dashboard/index/');
    } else {
       
        $this->session->set_flashdata('msg', 'Invalid username or password');
        redirect(base_url().'admin/login/index/');
    }
}
else{
    $this->load->view('admin/login');
    
   
}

}
public function register(){
    $this->load->view('admin/register');
}

public function register_action()
	{
       $this->form_validation->set_rules('firstname' , 'First name' , 'required');
	   $this->form_validation->set_rules('lastname' , 'Last name' , 'required');
	   $this->form_validation->set_rules('email' , 'Email' , 'required');
	   $this->form_validation->set_rules('password' , 'Password' , 'required');
	   

       if($this->form_validation->run() == false){
		$this->load->view('admin/register/');
	   }
	   else{
		$this->load->model('user_model');
		$formArray=array();
		$formArray['firstname'] = $this->input->post('firstname');
		$formArray['lastname'] =$this->input->post('lastname');
		$formArray['email'] = $this->input->post('email');
		$formArray['password'] = md5($this->input->post('password'));
		
		

		$this->user_model->register($formArray);

		$this->session->set_flashdata('msg','Your account has been successfully created');
		redirect(base_url().'admin/login/index/');
	   }
	}

}




?>