<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rinci is a website where you can design your own T-Shirt, Sweater, Jacket, Mug, Pillow and many more. All design will become yours, we are only platform to help your creativity channeled. Let's design with Rinci!">
    <meta name="author" content="Firman Qodry">

    <base href="<?php echo base_url(); ?>">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="assets/css/landing-page.min.css" rel="stylesheet">

    <!-- RINCI Custom CSS -->
    <link rel="stylesheet" href="assets/css/sieben.css">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="">
          <img src="assets/img/r-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">&nbsp;Rinci
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="navbar-item"><a href="welcome" class="nav-link">Home</a></li>
            <li class="navbar-item"><a href="javascript:void()" class="nav-link" onclick="alert('This feature will available soon.')">Products</a></li>
            <li class="navbar-item"><a href="javascript:void()" class="nav-link" onclick="alert('This feature will available soon.')">Custom Design</a></li>
            <li class="navbar-item"><a href="javascript:void()" class="nav-link" onclick="alert('This feature will available soon.')">Order Status</a></li>
            <li class="navbar-item"><a href="about" class="nav-link">About Us</a></li>
            <?php if(isset($this->session->userdata['loggedIn'])){
              echo '
                <li class="navbar-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$sessUserFirstname.' '.$sessUserLastname.'</a>
                  <div class="dropdown-menu" aria-labelledby="profileDropdown">
                    <a href="dashboard" class="dropdown-item">My Dashboard</a>
                    <a href="login/logout" class="dropdown-item">Logout</a>
                  </div>
                </li>';
            } else {
              echo '<li class="navbar-item"><a href="login" class="btn btn-primary"><i class="fa fa-user"></i> Sign In</a></li>';
            } ?>
          </ul>
        </div>
      </div>
    </nav>