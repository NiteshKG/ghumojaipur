<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url().'ghumojaipur.css' ?>">
    <title>Dashboard</title>
</head>
<style>
    .navbar-light .navbar-nav .nav-link {
        color: white;
    }
  

</style>

<body>
    <!-- <header -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff4b6c;">
    <a class="navbar-brand" href="#">
        <img src="" class="" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shopping</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transportation</a>
            </li>
        </ul>
    </div>
</nav>





    <div class="container">
    <div class="portal ">
    <h3 class="mt-4" style="text-align:center;">Welcome to ghumojaipur portal</h3>
    </div>
    <div class="row " >
        <div class="ml-5" style="display:block;">
            <div class="shadow p-3 mb-5 bg-white rounded" style="text-align:center;">
                <button class="btn btn-primary" style="background-color: #ff4b6c;">
                    <a href="<?= base_url().'index.php/user/takeidea/' ?>" style="color: white; text-decoration: none;">
                        Click here to give us an idea
                    </a>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="shadow p-3 mb-5 bg-white rounded">
                <button class="btn btn-primary" style="background-color: #ff4b6c;">
                    <a href="<?= base_url().'index.php/user/update/' ?>" style="color: white; text-decoration: none;">
                        Click here to update us about an event
                    </a>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="shadow p-3 mb-5 bg-white rounded">
                <button class="btn btn-primary" style="background-color: #ff4b6c;">
                    <a href="<?= base_url().'index.php/user/workwithus/' ?>" style="color: white; text-decoration: none;">
                        Click here to work with us
                    </a>
                </button>
            </div>
        </div>
    </div>
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
</body>
</html>
