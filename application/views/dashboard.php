<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') . 'ghumojaipur.css?v=' . rand() ?>">
    <title>Dashboard</title>
</head>
<style>
    .navbar-light .navbar-nav .nav-link {
        color: white;
    }

    .bodt {
        border: 3px solid #b7b7b7;
        border-radius: 10px;
    }

    .row {
        justify-content: center;
    }

    .flx { 
        justify-content: center;
    }

    .jcc {
        justify-content: center;
    }
    .img{
        width: 128px;
    }
    .w70{
        padding:11px 0px 4px 0px;
    }
    .w60{
        padding:11px 0px 4px 0px;
    }
    .w50{
        padding:11px 0px 4px 0px;
    }

    
</style>

<body>
    <!-- <header -->
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
    <div class="container-fluid">
        <div class="poratal mb-5">
            <h1>Welcome To Ghumo</h1>
            <h1>Jaipur Portal</h1>
            <p>खम्मा घणी</p>
            <div class="icondiv">
                <a href="<?= base_url() . 'index.php/user/takeidea/' ?>">
                    <button class="idea">
                        <i class="icon fa fa-lightbulb-o" aria-hidden="true"></i>
                        <span class="button-text">Contribute Your Creative Ideas</span>
                    </button>
                </a>
            </div>

            <div class="icondiv">
                <a class="update-link" href="<?= base_url() . 'index.php/user/update/' ?>">
                    <button class="update">
                        <i class="icon fa fa-building" aria-hidden="true"></i>
                        <span class="button-text">Contribute City Updates</span>
                    </button>
                </a>
            </div>
            <div class="icondiv">
                <a class="work-link" href="<?= base_url() . 'index.php/user/workwithus/' ?>">
                    <button class="work">
                        <i class="icon fa fa-users" aria-hidden="true"></i>
                        <span class="button-text">Work With Us</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="container text-center ">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="flx jcc bodt">
                        <div class="w70">
                            <div class="flx">
                                <img src="<?php echo base_url() . 'assets/images/idea.png' ?>" class="img" style="" />
                            </div>
                            <div class="improve">
                                <ul class="ideaex">
                                    <h4><b style="color:#EE1139;">Button 1 - Innovative Ideas:</b></h4>
                                    <li>Recommendations for enhancing</li>
                                    <li>Requests for new features</li>
                                    <li>Reports on identified bugs</li>
                                    <li>Additional ideas for consideration</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 ">
                    <div class="flx jcc bodt">
                        <div class="w60">
                            <div class="flx">
                                <img src="<?php echo base_url() . 'assets/images/city.png' ?>" class="img" style="" />
                            </div>
                            <div class="city">
                                <ul class="updateex">
                                    <h4><b style="color:#EE1139;">Button 2 - Cityscape Highlights:</b></h4>
                                    <li>Environmental and sustainability</li>
                                    <li>Highlights of cultural activities</li>
                                    <li>Calendar of upcoming events</li>
                                    <li>City updates and announcements</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 ">
                    <div class="flx jcc bodt">
                        <div class="w50">
                            <div class="flx">
                                <img src="<?php echo base_url() . 'assets/images/work.png' ?>" class="img" style="" />
                            </div>
                            <div class="join">
                                <ul class="workex">
                                    <h4><b style="color:#EE1139;" >Button 3 - Work With Us:</b></h4>
                                    <li>Collaborating on projects</li>
                                    <li>Finding like-minded individuals</li>
                                    <li>Sharing skills and ideas</li>
                                    <li>Expanding opportunities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
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
                                <a href="" class="text-white">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="" class="text-white">Terms &amp; condition</a>
                            </li>
                            <li>
                                <a href="" class="text-white">Disclaimer</a>
                            </li>
                            <li>
                                <a href="" class="text-white">Contact Us</a>
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


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
</body>

</html>