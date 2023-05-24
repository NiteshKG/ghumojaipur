<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function takeidea()
	{
       $this->form_validation->set_rules('name' , 'Name' , 'required');
	   $this->form_validation->set_rules('date' , 'Date' , 'required');
	   $this->form_validation->set_rules('topic' , 'Topic' , 'required');
	   $this->form_validation->set_rules('youridea' , 'Your idea' , 'required');
	   

       if($this->form_validation->run() == false){
		$this->load->view('forms/takeidea');
	   }
	   else{
		$this->load->model('user_model');
		$formArray=array();
		$formArray['name'] = $this->input->post('first_name');
		$formArray['date'] =$this->input->post('date');
		$formArray['topic'] = $this->input->post('topic');
		$formArray['youridea'] = $this->input->post('youridea');
		
		

		$this->user_model->create($formArray);

		$this->session->set_flashdata('msg','Your suggestion has been successfully recorded');
		redirect(base_url().'index.php/user/takeidea/');
	   }
	}

	public function update()
	{
       $this->form_validation->set_rules('name' , 'Name' , 'required');
	   $this->form_validation->set_rules('date' , 'Date' , 'required');
	   $this->form_validation->set_rules('topic' , 'Topic' , 'required');
	   $this->form_validation->set_rules('abouttopic' , 'About Topic' , 'required');
	   

       if($this->form_validation->run() == false){
		$this->load->view('forms/update');
	   }
	   else{
		$this->load->model('user_model');
		$formArray=array();
		$formArray['name'] = $this->input->post('name');
		$formArray['date'] =$this->input->post('date');
		$formArray['topic'] = $this->input->post('topic');
		$formArray['abouttopic'] = $this->input->post('abouttopic');
		
		

		$this->user_model->update($formArray);

		$this->session->set_flashdata('msg','Your information has been successfully saved');
		redirect(base_url().'index.php/user/update/');
	   }
	}

	public function work()
	{
       $this->form_validation->set_rules('name' , 'Name' , 'required');
	   $this->form_validation->set_rules('mobile' , 'mobile' , 'required');
	   $this->form_validation->set_rules('profession' , 'Profession' , 'required');
	   $this->form_validation->set_rules('about' , 'About' , 'required');
	   

       if($this->form_validation->run() == false){
		$this->load->view('forms/work');
	   }
	   else{
		$this->load->model('user_model');
		$formArray=array();
		$formArray['name'] = $this->input->post('name');
		$formArray['mobile'] =$this->input->post('mobile');
		$formArray['profession'] = $this->input->post('profession');
		$formArray['about'] = $this->input->post('about');
		
		

		$this->user_model->work($formArray);

		$this->session->set_flashdata('msg','Your details has been successfully saved');
		redirect(base_url().'index.php/user/work/');
	   }
	}
}
