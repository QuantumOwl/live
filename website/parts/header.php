
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cano's Gaming</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Icon -->

  <link rel="shortcut icon" href="assets/images/icon-2.ico"/>


  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />

  <!-- FontAwesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>

  <!-- Owl Carousel -->
  <link rel="stylesheet" type="text/css" href="../assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />

  <!-- Youplay -->
  <link rel="stylesheet" type="text/css" href="../assets/youplay/css/youplay.min.css" />
  
  <link rel="stylesheet" type="text/css" href="triangle.css" />

</head>


<body>
  


  <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          
        </button>
        <a class="navbar-brand" href="?page=body">
          <img src="assets/images/logo.png" alt="">
        </a>
      </div>
      
      

<?php

if (!isset($loggedUser)) {
?>
  <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a  href="?page=login">  Login  </a></li>  
<?php
} else {
    
?> 
            <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          
          <li><a  href="?page=logout"><?php
          
          if ($loggedUser->admin == '1'){
            echo 'Admin |';
          } 
          
          ?><?php echo $loggedUser->username . " | "  ; ?> Logout  </a></li>
      

<?php
}
?>
 
      
            
          
          <li>
            <a  href="?page=search">&nbsp;TOURNAMENTS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->
