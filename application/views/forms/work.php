<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<title>Register</title>
</head>
<body>
	<div class="container">
		<?php
      $msg = $this->session->flashdata('msg');
	  if($msg!=""){
		echo "<div class='alert alert-success'>$msg</div>";
	  }

   ?>
		<div class="col-md-6">
		<div class="card mt-4">
  <div class="card-header">
   Want To Work With Us
  </div>
  <form action="<?php echo base_url().'index.php/user/work/'; ?>" method="post" name="registerform">
  <div class="card-body">
    
    
    <div class="form-group">
		<label for="name"><b>Name</b></label>
		<input type="text" name="name" id="name" value="<?php echo set_value(field : 'name') ?>" class="form-control" placeholder="Enter your name">
		<label for=""><?php echo form_error('name')? form_error('name') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>Mobile Number</b></label>
		<input type="text" name="mobile" id="mobile" value="<?php echo set_value(field : 'mobile') ?>" class="form-control" placeholder="Enter your mobile no.">
		<label for=""><?php echo form_error('mobile')? form_error('mobile') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>Your Profession</b></label>
		<input type="text" name="profession" id="profession" value="<?php echo set_value(field : 'profession') ?>" class="form-control" placeholder="Enter your profession">
		<label for=""><?php echo form_error('profession')? form_error('profession') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>About Yourself</b></label>
		<input type="text" name="about" id="about" value="<?php echo set_value(field : 'about') ?>" class="form-control" placeholder="Describe about Yourself">
		<label for=""><?php echo form_error('about')? form_error('about') : '' ;?></label>
	</div>
	
	<div class="form-group">
		<button class="btn btn-block btn-primary">SUBMIT</button>
	</div>
  </div>
  </form>
</div>
		</div>
	</div>
</body>
</html>