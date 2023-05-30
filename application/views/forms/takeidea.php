<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url().'ghumojaipur.css' ?>">
    <title>Idea Sharing Form</title>
</head>
<style>
.error-label {
  color: red;
}
</style>
<body>
    <!-- <header -->
    <nav class="navbar navbar-expand-lg">
        <img src="" class="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Forts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">Shopping</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">Transporation</a>
                </li>
            </ul>
        </div>
    </nav>   

	<div class="container">
  <?php
      $msg = $this->session->flashdata('msg');
	  if($msg!=""){
		echo "<div class='alert alert-success'>$msg</div>";
	  }

   ?>
  </div>

    <div class="container my-5 ">

        <!-------------------------------- </Form> -------------------------------->

        <form class="formdiv" method="post" action="<?php echo base_url().'index.php/user/takeidea/'; ?>" >
            <div class="form-group ">
                <h4>Share your best Idea</h4>
            </div>

            <!-- Name Section -->

            <div class="form-group wrth90 mg-auto">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control " value="<?php echo set_value(field : 'name') ?>"  name="name"
                    placeholder="Enter your name">
                    <label for="" class="error-label"><?php echo form_error('name')? form_error('name') : '' ;?></label>
            </div>

            <!-- Phone Section -->

            <div class="form-group wrth90 mg-auto">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" value="<?php echo set_value(field : 'phone') ?>" name="phone" placeholder="Enter your phone number">
                <label for="" class="error-label"><?php echo form_error('phone')? form_error('phone') : '' ;?></label>
            </div>

            <!-- Idea Title section -->

            <div class="form-group wrth90 mg-auto">
                <label for="ideaTitle">Idea Title:</label>
                <input type="text" class="form-control" name="title" value="<?php echo set_value(field : 'title') ?>" placeholder="Enter the idea title">
                <label for="" class="error-label"><?php echo form_error('title')? form_error('title') : '' ;?></label>
            </div>

            <!-- Description section -->

            <div class="form-group wrth90 mg-auto">
                <label for="ideaDescription">Describe your idea:</label>
                <textarea class="form-control" name="description"  value="<?php echo set_value(field : 'description') ?>" rows="5" placeholder="Write here"></textarea>
                <label for="" class="error-label"><?php echo form_error('description')? form_error('description') : '' ;?></label>
            </div>

            <button>Submit</button>
        </form>

    </div>

    <div class="container">

        <div>
            <h2 class="mt-5 undrstandingtext">Let's Understand This</h2>
        </div>

        <div class="ditalis mt-5 lefttextdiv">
            <div class="about-form lefttext">
                <h4>About Form</h4>
                <p>Give us best ideas for Improvment in our website Ghumo.jaipur</p>
            </div>
            <div class="logo1">
                <img src="" class=" " style="width:10rem;">
            </div>
        </div>

        <div class="ditalis1 mt-5 righttextdiv">
            <div>
                <img src="" class="" style="width:10rem;">
            </div>
            <div class="about-form righttext">
                <h4>Types Of Ideas</h4>
                <p>Whatever you think should be improved in this thing or
                    what type of thing should be done like this or along with this you can also give idea for the
                    content in this site that put this type of news or this type of content pour</p>
            </div>
        </div>
    </div>


    <div class="footer" style="background-color:#957676; Display:flex;">
        <h3 style="color:white; margin: 15px auto; font-size:15px;">Thank You For Great Idea</h3>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>