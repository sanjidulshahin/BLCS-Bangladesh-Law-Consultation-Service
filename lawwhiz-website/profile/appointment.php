<?php
    session_start();
    if (isset($_SESSION['submission_success']) && $_SESSION['submission_success']) {
        echo '<p class="submission">Your submission has been sent successfully!</p>';
        // Unset the session variable to clear the message after displaying
        unset($_SESSION['submission_success']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLCS-Bangladesh Legal Consultation Service</title>
     
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
      include "headercat.php";
    ?>
    <section id="appointment" class="appointment">
        
      
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="bg-appointment rounded">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-lg-6 py-5">
                            <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                                <h1 class="text-center text-white mb-4">Get An Appointment</h1>
                                
                                <form action="appointmentconfig.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control border-0 p-4" name = "client_id" placeholder="Your ID" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control border-0 p-4" name = "lawyer_id" placeholder="Lawyer ID" required="required" />
                                    </div>

                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="date" id="date" data-target-input="nearest">
                                                <input type="date" id="datepicker"placeholder="Select Date" name="date" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="time" id="time" data-target-input="nearest">
                                                <input type="time" id="timepicker"placeholder="Select Time" name="time" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select border-0 px-4" name="service" style="height: 47px;">
                                            <option selected>Select A Service</option>
                                            <option value="1" >Family Law</option>
                                            <option value="2">Criminal Law</option>
                                            <option value="3">Civil Law</option>
                                            <option value="3">Business Law</option>
                                        </select>
                                        </select>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-block border-0 py-3" type="submit" name="submit" value="submit">Get An Appointment</button>
                                        
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
             include "footercat.php";
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

    
</body>
</html>