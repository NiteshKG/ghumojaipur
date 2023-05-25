<!DOCTYPE html>
<html>
<head>
  <title>dashboard</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      padding-top: 100px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .row {
      justify-content: center;
      margin-bottom: 20px;
    }

    .col-md-4 {
      text-align: center;
    }

    .col-md-4 button {
      width: 100%;
      height: 100%;
      padding: 30px;
      font-size: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Welcome to ghumojaipur portal</h1>
    <div class="row">
      <div class="col-md-4 mb-4">
     <button><a href="<?= base_url().'index.php/user/takeidea/' ?>">Click here to give us a idea</a></button>
      </div>
      </div>
      <div class="row">
      <div class="col-md-4 mb-4">
      <button><a href="<?= base_url().'index.php/user/update/' ?>">Click here to update us about an event</a></button>
      </div>
      </div>
      <div class="row">
      <div class="col-md-4 mb-4">
      <button><a href="<?= base_url().'index.php/user/work/' ?>">Click here to work with us</a></button>
      </div>
      </div>
    
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
