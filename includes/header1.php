<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FindYourPG
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo_pg.png" rel="icon">
  <link href="img/logo_pg.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/linearicons.css">=
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

 
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">FindYour<span class="color-b">PG</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="pg.php">PG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="about-us.php">About</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="owner/login.php">Owner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="admin/login.php">Admin</a>
          </li>
          <?php 
                        if(strlen($_SESSION['pgasuid']==0)) {?> 
               <li class="nav-item">
            <a class="nav-link " href="register.php">Login/Register</a>
          </li>         
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
          <?php if (strlen($_SESSION['pgasuid']>0)) {?>
            <li class="nav-item">
            <a class="nav-link " href="apply-forpg.php">Book Your PG</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="user-profile.php">My Profile</a>
              <a class="dropdown-item " href="my-bookings.php">My Bookings</a>
              <a class="dropdown-item " href="change-password.php">Change Password</a>
              <a class="dropdown-item " href="logout.php">Logout</a>
            </div>
          </li>
          
          <?php } ?>
         <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>
        </ul>
      </div>
    </div>
</nav>
</html>
