<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url().'ghumojaipur.css' ?>">
    <title>join our team</title>
</head>
<style>
    .error-label {
  color: red;
}

</style>
<body>
    <!-- <header -->
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#ff4b6c; ">
            <img src="ghumojaipurlogo/img.png" class=" " style="width:10rem;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-3" style="color:white;" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" style="color:white;"href="#">Forts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" style="color:white;"href="#">Shopping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="color:white;"href="#">Transporation</a>
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

        <form class="formdiv" method="post" action="<?php echo base_url().'index.php/user/workwithus/'; ?>">
        <div class="form-group ">
            <h4 class="pt-4" style="text-align:center " ><u style="text-decoration-color:#ff4b6c;">Join Our Team</u></h4>
            <p class="mt-3" style="text-align:center;">Emphasize that the form is an opportunity for users to join our team or collaborate with us.</p>
            </div>

            <!-- Name Section -->

            <div class="form-group wrth90 mg-auto">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control "   value="<?php echo set_value(field : 'name') ?>" name="name" aria-describedby="nameHelp" 
                    placeholder="Enter your name">
                    <label for="" class="error-label"><?php echo form_error('name')? form_error('name') : '' ;?></label>
            </div>

            <!-- Phone Section -->

            <div class="form-group wrth90 mg-auto">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control"  value="<?php echo set_value(field : 'name') ?>" name="phone" placeholder="Enter your phone number">
                <label for="" class="error-label"><?php echo form_error('phone')? form_error('phone') : '' ;?></label>
            </div>

            <!-- Intrest Section -->

            <div class="form-group wrth90 mg-auto">
                <label for="areaOfInterest">Area of Interest:</label>
                <select class="form-control"  value="<?php echo set_value(field : 'areaOfInterest') ?>"  name="areaOfInterest">
                  <option value="">Select an Area of Interest</option>
                  <option value="EventPlanning">Event Planning and Coordination</option>
                  <option value="Trekking">Trekking and Outdoor Adventures</option>
                  <option value="LiveMusic">Live Music Performances</option>
                  <option value="Art activity">Art and Culture Promotion</option>
                  <option value="Social Media">Social Media Marketing and Promotion</option>
                  <option value="Photography">Photography and Videography</option>
                  <option value="Coordinator">Volunteer Management and Coordination</option>
                  <option value="Designing">Graphic Design and Visual Content Creation</option>
                  <option value="Public Relations">Public Relations and Communications</option>
                  <option value="Sponsorship">Sponsorship and Fundraising</option>
                  <!-- Add more options as per your needs -->
                </select>
                <label for="" class="error-label"><?php echo form_error('areaOfInterest')? form_error('areaOfInterest') : '' ;?></label>
              </div>

            <!-- Message section -->

            <div class="form-group wrth90 mg-auto">
                <label for="message">Message:</label>
                <textarea class="form-control" name="message" value="<?php echo set_value(field : 'message') ?>" rows="5" placeholder="Enter a message"></textarea>
                <label for="" class="error-label"><?php echo form_error('message')? form_error('message') : '' ;?></label>
            </div>

            <div class="mt-3 pb-3" style="text-align:center;">
             <input type="submit" name="submit" value="submit" style="width:30%;  background-color:#ff4b6c; color:white; " >
             </div>
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


    <footer class="bg-dark text-center text-white" style="height:50px;" >
    <div class="footer" style="background-color:#343333; ">
        <h3 style="color:white; text-align:center; text-decoration:underline;" class="pt-3">Thank You For Great Idea</h3>
        <div class="text ml-5 mt-4" style="Display:flex;" >
           <div class="ghumojaipurlogo"> <img src="logo/bg.png" class=" ml-1 " style="width:5rem; text-decoration:underline;" alt="error">
           <p><span style="color:white;">Created by</span> <span style="color:#ff4b6c;">Enaicworld Media</span></p></div>
           <div class="icons ml-auto">
           <div class="socialmedialogo ml-4" style="text-align:center; display:block;">
               <a href="#" class="fa fa-facebook mx-3 my-2" style="color:white; border:1px solid white; width:40px; height:40px; line-height:38px; display:inline-block;text-align:center;border-radius:50%; "></a>
               <a href="#" class="fa fa-twitter mx-3"  style="color:white; border:1px solid white; width:40px; height:40px; line-height:38px; display:inline-block;text-align:center;border-radius:50%;"></a>
               <a href="#" class="fa fa-youtube mx-3"  style="color:white; border:1px solid white; width:40px; height:40px; line-height:38px; display:inline-block;text-align:center;border-radius:50%;"></a>
               <a href="#" class="fa fa-instagram mx-3" style="color:white; border:1px solid white; width:40px; height:40px; line-height:38px; display:inline-block;text-align:center;border-radius:50%;"></a>
               <a href="#" class="fa fa-whatsapp mx-3" style="color:white; border:1px solid white; width:40px; height:40px; line-height:38px; display:inline-block;text-align:center;border-radius:50%;"></a>
            </div>
          
               <div class="font">
                   <ul class="fotternav " style="text-align:center;">
                       <li class="nav-item" style="display:inline-block;">
                           <a class="nav-link mr-3" style="color:white;" href="#">Home</a>
                        </li>
                       <li class="nav-item"style="display:inline-block;">
                           <a class="nav-link mx-3" style="color:white;"href="#">Forts</a>
                       </li>
                       <li class="nav-item"style="display:inline-block;">
                           <a class="nav-link mx-3" style="color:white;"href="#">Shopping</a>
                       </li>
                       <li class="nav-item"style="display:inline-block;">
                           <a class="nav-link mx-3" style="color:white;"href="#">Transporation</a>
                       </li>
                   </ul>
               </div>
            </div>
        </div>
        <div class="last " style="color:white; text-align:center;"><p class="pb-2">© 2023 Ghumo Jaipur. All rights reserved.</p></div>
</div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>