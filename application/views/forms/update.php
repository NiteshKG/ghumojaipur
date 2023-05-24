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
    Update Us about Jaipur
  </div>
  <form action="<?php echo base_url().'index.php/user/update/'; ?>" method="post" name="registerform">
  <div class="card-body">
    
    
    <div class="form-group">
		<label for="name"><b>Name</b></label>
		<input type="text" name="name" id="name" value="<?php echo set_value(field : 'name') ?>" class="form-control" placeholder="Enter your name">
		<label for=""><?php echo form_error('name')? form_error('name') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>Date</b></label>
		<input type="date" name="date" id="date" value="<?php echo set_value(field : 'date') ?>" class="form-control" placeholder="Select a date">
		<label for=""><?php echo form_error('date')? form_error('date') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>Topic</b></label>
		<input type="text" name="topic" id="topic" value="<?php echo set_value(field : 'topic') ?>" class="form-control" placeholder="Enter your topic name">
		<label for=""><?php echo form_error('topic')? form_error('topic') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>About Topic</b></label>
		<input type="text" name="abouttopic" id="abouttopic" value="<?php echo set_value(field : 'abouttopic') ?>" class="form-control" placeholder="Describe about Topic">
		<label for=""><?php echo form_error('abouttopic')? form_error('abouttopic') : '' ;?></label>
	</div>
	
	<div class="form-group">
		<button class="btn btn-block btn-primary">UPDATE</button>
	</div>
  </div>
  </form>
</div>
		</div>
	</div>
</body>
</html>