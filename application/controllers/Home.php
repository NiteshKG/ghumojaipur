<?php   
class Home extends CI_Controller{

 public function home(){
    $this->load->view('common/header');
    $this->load->view('body');
    $this->load->view('common/footer');
 }
public function dashboard(){
   $this->load->view('dashboard');
}

public function learnmore(){
   $this->load->view('learnmore');
}
public function contact(){
   $this->load->view('contact');
}

}


?>