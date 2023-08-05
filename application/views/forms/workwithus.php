<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') . 'ghumojaipur.css?v=' . rand() ?>">

    <title>join our team</title>
</head>

<body>



    <!-------------------------- <header -------------------------->





    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#ff4b6c; width:100%;">
        <img src="<?php echo base_url() . 'assets/images/img.png' ?>" class=" " style="width:10rem;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link mx-3" style="color:white;" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" style="color:white;" href="#">Forts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" style="color:white;" href="#">Shopping</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" style="color:white;" href="#">Transporation</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="containers">
        <?php
        $msg = $this->session->flashdata('msg');
        if ($msg != "") {
            echo "<div class='alert alert-success'>
              $msg
              <span class='close'>&times;</span>
          </div>";
        }
        ?>

    </div>













    <!-------------------------------- </Form> -------------------------------->



    <form class="mg-auto formdiv" method="Post" action="<?php echo base_url() . 'index.php/user/workwithus/'; ?>">

        <h4 style="text-align:center">
            <u style="text-decoration-color:#ff4b6c;">Join Our Team</u>
        </h4>


        <!-- Name Section -->

        <div class="form-group wrth90 mg-auto">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control " name="name" placeholder="Enter your name">
            <label for ="" class="error-label"><?php echo form_error('name')?form_error('name') : '' ;?></label>
        </div>




        <!-- Phone Section -->

        <div class="form-group wrth90 mg-auto">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number">
            <label for ="" class="error-label"><?php echo form_error('phone')?form_error('phone') : '' ;?></label>
        </div>




        <!-- Idea Title section -->

        <div class="form-group wrth90 mg-auto">
            <label for="areaOfInterest">Area of Interest:</label>
            <select class="form-control" id="areaOfInterest" name="areaOfInterest">
                <option value="">Select an Area of Interest</option>
                <option value="EventPlanning">Event Planning and Coordination</option>
                <option value="Trekking">Trekking and Outdoor Adventures</option>
                <option value="LiveMusic">Live Music Performances</option>
                <option value="LiveMusic">Art and Culture Promotion</option>
                <option value="LiveMusic">Social Media Marketing and Promotion</option>
                <option value="LiveMusic">Photography and Videography</option>
                <option value="LiveMusic">Volunteer Management and Coordination</option>
                <option value="LiveMusic">Graphic Design and Visual Content Creation</option>
                <option value="LiveMusic">Public Relations and Communications</option>
                <option value="LiveMusic">Sponsorship and Fundraising</option>
                <!-- Add more options as per your needs -->
            </select>
            <label for ="" class="error-label"><?php echo form_error('areaOfInterest')?form_error('areaOfInterest') : '' ;?></label>
        </div <!-- Description section -->

        <div class="form-group wrth90 mg-auto">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Enter a message"></textarea>
        </div>



        <div class="mt-3 mb-3 pb-3" style="text-align:center;">
            <button> Submit </button>
        </div>

    </form>




    <div class="textdiv">

        <h2 style="text-align:center" class="mt-5">
            <u style="text-decoration-color:#ff4b6c;">Let's Understand This</u>
        </h2>

        <div class="container mt-5 pt-5">

            <div class="row">
                <div class=" col-md-6 px-4">
                    <h4>About Form</h4>
                    <p class="explaintion">Give us best ideas for Improvment in our website Ghumo.jaipur</p>
                </div>
                <div class="logo1 col-md-6 text-center ">
                    <img src="<?php echo base_url() . 'assets/images/logo.png' ?>" class=" " style="width:12rem;">

                </div>
            </div>

        </div>
        <div class="container mt-5 mb-5 pb-3">
            <div class="row mg-auto">
                <div class="text col-md-6 ">

                    <img src="<?php echo base_url() . 'assets/images/join.png' ?>" class="" style="width:15rem;">

                </div>
                <div class="col-md-6">
                    <h4>What Is This</h4>
                    <p class="explaintion">This form provides you with an opportunity to explore various ways to join
                        forces with us. Whether you're interested in career opportunities, volunteering, partnerships,
                        or vendor collaborations, we invite you to share your details and interests with us.</p>
                </div>

            </div>
        </div>
    </div>
    </div>





    <!---------------------------------------- Footer ---------------------------------------->


    <footer class="futterdarkcolor bg-dark text-center text-white">

        <div class="container p-4">

            <section class="mb-4 socialicon">

                <a class="btn boostrapfacebook btn-outline-light btn-floating m-1" href="" role="button"><i
                        class="fa fa-instagram"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                        class="fa fa-youtube"></i></a>



                <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                        class="fa fa-facebook"></i></a>


            </section>


            <section class="">
                <form method="post" action="https://risingpoll.com/manage/email_newsletter">

                    <div class="row d-flex justify-content-center">

                        <div class="col-auto">
                            <p class="pt-2 margin0">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>


                        <div class="col-md-5 col-12">

                            <div class="form-outline emaildiv form-white mb-4">
                                <input type="email" name="email_newsletter" placeholder="Email Address"
                                    class="form-control">
                            </div>
                        </div>


                        <div class="col-auto">

                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>

                    </div>

                </form>
            </section>


            <section class="mb-4">
                <p class="margin0">
                    Gather opinions and insights with Rising Poll - the user-friendly platform for creating and
                    participating in engaging polls. Join us today to start polling!
                </p>
            </section>


            <section class="">

                <div class="row">

                    <div class="col-md-6">
                        <img class="roundedlogo" src="<?php echo base_url() . 'assets/images/bg.png' ?>">
                    </div>


                    <div class="col-md-6">

                        <ul class="list-unstyled futternavi mb-0 d-inline text-center">
                            <li>
                                <a href="" class="text-white">Home</a>
                            </li>
                            <li>
                                <a href="" class="text-white">Forts</a>
                            </li>
                            <li>
                                <a href="" class="text-white">Shopping</a>
                            </li>
                            <li>
                                <a href="" class="text-white">Transporation</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </section>

        </div>


        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="text-white" href="">© 2023 GhumoJaipur. All rights reserved.</a>
        </div>

    </footer>






</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>