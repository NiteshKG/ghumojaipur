<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') . 'ghumojaipur.css?v=' . rand() ?>">

    <title><?= $title ?></title>
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
                    <a class="nav-link mx-3" style="color:white;" href="<?= base_url() ?>https://ghumojaipur.com/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" style="color:white;" href="<?= base_url() ?>volunteers">Volunteers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" style="color:white;" href="<?= base_url() ?>portal">Portal</a>
                </li>
                
            </ul>
        </div>
    </nav>