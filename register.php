
<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $MaritalStatus=$_POST['MaritalStatus'];
    $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$mobno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
    $msg="This email or Contact Number already associated with another account";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FullName, MobileNumber, Email,MaritalStatus,  Password) value('$fname', '$mobno', '$email','$MaritalStatus', '$password' )");
    if ($query) {
    $msg="You have successfully registered";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}
}

 ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	
	<title>Paying Guest Accomodation System|| User Signup</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
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

	<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 

</script>
</head>

<body>

	<!-- Start Header Area -->

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
            <a class="nav-link " href="signin.php">Signup</a>
          </li>         
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">contact</a>
          </li>
          <?php if (strlen($_SESSION['pgasuid']>0)) {?>
            <li class="nav-item">
            <a class="nav-link " href="apply-forpg.php">Book Your PG</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MY Account</a>
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


	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex text-center align-items-center justify-content-center">
				<div class="about-content col-lg-12">
				
					<h1 class="text-white">
						Register
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<p style="text-align: center;color: red;font-size: 30px"><strong>Register </strong></p>
			<div class="row mt-80">
				<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
				<div class="col-lg-12">
					<form class="row contact_form" action="" method="post" id="" name="signup" onsubmit="return checkpass();">
						<div class="col-md-12">

						

							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required="true">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required="true">
							</div>
              <label class="col-sm-3 control-label">MaritalStatus</label>
                <div class="col-sm-6">
                <input type="radio" name="MaritalStatus" id="MaritalStatus" value="married" checked="true">
                married<br>
                <input type="radio" name="MaritalStatus" id="MaritalStatus" value="unmarried">
                Unmarried
                
                </div><br>
							<div class="form-group">
								<input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Enter Mobile Number" maxlength="10" pattern="[0-9]{10}" required="true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="repeatpassword" name="repeatpassword" placeholder="Repeat Password" required="true">
							</div>
							
						</div>
						
						<div class="col-md-6 text-left">
							<button type="submit" value="submit" name="submit" class="btn primary-btn">Register</button>
						</div>
						<div class="col-md-6 text-left">
					
					
					
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<!-- start footer Area -->
	<?php include_once('includes/footer.php');?>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/ion.rangeSlider.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>