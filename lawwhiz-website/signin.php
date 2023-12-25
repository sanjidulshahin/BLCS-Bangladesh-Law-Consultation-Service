<?php
  include 'connect.php';
  error_reporting(0);
  session_start();
  //session_destroy();

  if ($_SESSION['message']){
    $message = $_SESSION['message'];
    echo "<secipt type ='text/javascript'>
    alert('$message');
     </script>";
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LAWWHIZ -Legal Consultation Service  </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="css/newstyle.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">
   

</head>

<body>
  
   
    <?php 
      include "signinupheader.php";
    ?>
    <section id="appointment" class="appointment">
        
      
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="bg-appointment rounded">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-lg-6 py-5">
                            <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                                <h1 class="text-center text-white mb-4">Sign In</h1>
                                
                                <form action = "signinconfig.php" method = "POST">
                                    <div class="form-group">
                                        <input  type="text" id="username" name="username" class="form-control border-0 p-4"  placeholder="Your Name" required="required" />
                                    </div>
                                   
                
                                    <div class="form-group">
                                        <input type="password" id="password" name="password"  class="form-control border-0 p-4"  placeholder="Password" required="required" />
                                    </div>

                                  
                                    <div>
                                        <button class="btn btn-primary btn-block border-0 py-3"  type="submit" value ="submit" name = "submit">Submit</button>
                                        
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Appointment End -->
        <footer>
            <?php 
             include "footer.php";
            ?>
        </footer> 
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../lib/tempusdominus/js/moment.min.js"></script>
        <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
</html>



