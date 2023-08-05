<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function takeidea()
	{
       $this->form_validation->set_rules('name' , 'Name' , 'required');
	   $this->form_validation->set_rules('phone' , 'Phone' , 'required');
	   $this->form_validation->set_rules('title' , 'Title' , 'required');
	   $this->form_validation->set_rules('description' , 'Idea description' , 'required');
	   

       if($this->form_validation->run() == false){
		$this->load->view('forms/takeidea');
	   }
	   else{
		$this->load->model('user_model');
		$formArray=array();
		$formArray['Name'] = $this->input->post('name');
		$formArray['Phone'] =$this->input->post('phone');
		$formArray['Title'] = $this->input->post('title');
		$formArray['IdeaDescription'] = $this->input->post('description');
		
		

		$this->user_model->create($formArray);

		$this->session->set_flashdata('msg','Your Idea has been successfully saved');
		redirect(base_url().'index.php/user/takeidea/');
	   }
	}

	public function update()
	{
       $this->form_validation->set_rules('name' , 'Name' , 'required');
	   $this->form_validation->set_rules('phone' , 'Phone' , 'required');
	   $this->form_validation->set_rules('title' , 'Title' , 'required');
	   $this->form_validation->set_rules('description' , 'Description' , 'required');
	   $this->form_validation->set_rules('image' , 'image' );

       if($this->form_validation->run() == false){
		$this->load->view('forms/update');
	   }
	   else{
        $this->load->model('user_model');
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = 2048; // 2MB
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			$uploadedData = $this->upload->data();
			$imagePath = $uploadedData['file_name'];
		} else {
			$imagePath = ''; // No image uploaded or upload failed
		}
		
		
        

		$formArray=array();
		$formArray['Name'] = $this->input->post('name');
		$formArray['Phone'] =$this->input->post('phone');
		$formArray['Title'] = $this->input->post('title');
		$formArray['Description'] = $this->input->post('description');
		
		$formArray['Images/Videos'] = $imagePath;

		$this->user_model->update($formArray);

		$this->session->set_flashdata('msg','Your information has been successfully saved');
		redirect(base_url().'index.php/user/update/');
	   }
	}

	public function workwithus()
	{
       $this->form_validation->set_rules('name' , 'Name' , 'required');
	   $this->form_validation->set_rules('phone' , 'Phone' , 'required');
	   $this->form_validation->set_rules('areaOfInterest' , 'Area of Interest' , 'required');
	   $this->form_validation->set_rules('message' , 'Message' , 'required');
	  
	   

       if($this->form_validation->run() == false){
		$this->load->view('forms/workwithus');
	   }
	   else{
		$this->load->model('user_model');
		$formArray=array();
		$formArray['name'] = $this->input->post('name');	
		$formArray['phone'] =$this->input->post('phone');
		$formArray['Interest'] =$this->input->post('areaOfInterest');
		$formArray['message'] =$this->input->post('message');
		$formArray['date'] = date('Y-m-d');
		
		

		$this->user_model->work($formArray);

		$this->session->set_flashdata('msg','Your details has been successfully saved');
		redirect(base_url().'index.php/user/workwithus/');
	}
 }
 public function about_us(){
	 $this->load->view('forms/about_us');
 }
}