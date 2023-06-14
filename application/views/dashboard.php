<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . 'ghumojaipur.css' ?>">
    <title>Dashboard</title>
</head>
<style>
    .navbar-light .navbar-nav .nav-link {
        color: white;
    }
</style>

<body>
    <!-- <header -->
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#ff4b6c; width:100%;">
            <img src="<?php echo base_url().'assets/images/img.png' ?>" class=" " style="width:10rem;">
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






    <div class="container mt-4 mb-5" style="border: 1px solid #d3c9c9;
    box-shadow: #8b8686 0px 0px 5px 0px;">
        <div class="portal ">
            <h3 class="mt-4" style="text-align:center;">Welcome To GhumoJaipur Portal</h3>
        </div>
        
            <div class="row " style="">
                <div class="mg-auto mt-5" style="">
                    <div class="shadow " style="text-align:center;">
                        <button class="btn btn-primary" style="background-color: #ff4b6c;">
                            <a href="<?= base_url() . 'index.php/user/takeidea/' ?>"
                                style="color: white; text-decoration: none;">
                                Click here to Give us an idea
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row" style="">
                <div class="mg-auto mt-5">
                    <div class="shadow ">
                        <button class="btn btn-primary" style="background-color: #ff4b6c;">
                            <a href="<?= base_url() . 'index.php/user/update/' ?>"
                                style="color: white; text-decoration: none;">
                                Click here to update us about an event
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row" style="">
                <div class="mg-auto mt-5  mb-5">
                    <div class="shadow ">
                        <button class="btn btn-primary" style="background-color: #ff4b6c;">
                            <a href="<?= base_url() . 'index.php/user/workwithus/' ?>"
                                style="color: white; text-decoration: none;">
                                 Click here to work with us
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        
    </div>
    <footer class="bg-dark text-center text-white" style="height:50px;" >
    <div class="footer " style="background-color:#343333; ">
        
        <div class="text ml-5 mt-4 pt-3" style="Display:flex;" >
           <div class="ghumojaipurlogo"> <img src="<?php echo base_url().'assets/images/bg.png' ?>" class=" ml-0  " style="width:5rem; text-decoration:underline;" alt="error">
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
</body>

</html>