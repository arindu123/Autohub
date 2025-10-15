<?php
session_start();  // Start the session

// Fetch the payment amount from the session
if (isset($_SESSION['last_amount'])) {
    $last_amount = $_SESSION['last_amount'];
    unset($_SESSION['last_amount']);  // Clear session after using it
} else {
    $last_amount = "Unknown";  // If no payment amount is found
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vehicles in Sri Lanka</title>
        <link rel="stylesheet" href="CSS/payment.css">
        <script src="JS/payment.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    </head>

    <body>
        <!---------------------------start of the navigation bar--------------------------->        
        <div class="nvbar">
            <a href="#"> <img class="Hlogo" src="Images/websitelogo.png" alt="webpage logo"> </a>
            <ul id="nvgbar">
                <li class="nvglist"> <a href="Home.html"> Home </a> </li>
                <li class="nvglist"> <a class="active" href="#"> Ads </a> </li>
                <li class="nvglist"> <a href="terms&condition.html"> Support </a> </li>
                <li class="nvglist"> <a href="#"> About us </a> </li>
                <li class="nvglist"> <a href="#"> Contact us </a> </li>
                <li class="nvglist"> <a href="signup.html"> Login </a> </li>
            </ul>
            <a href="#"> <img class="Flogo" src="Images/profile logo.png" alt="profile logo"> </a>
        </div>
        <!------------------------------End of navigation bar--------------------------->

        <!------------------------------ Payment Successful Section ------------------------------------->        
        <div class="content" id="invoice">
            <div class="payment-success-box">
                <div class="icon">
                    <img src="Images/U-done1.webp" alt="Success Icon">
                </div>
                <h1>Payment Successful</h1>
                <p>Your payment for posting your ad has been successfully processed!</p>
                
                <div class="transaction-details">
                    <h3>Transaction Details</h3>
                    <pre>
                        Amount             : $<?php echo $last_amount; ?> 
                        Transaction Number : 76641478925
                        Payment Method     : VISA Card
                        Date & Time        : <?php echo date('d M Y, H:i'); ?>
                    </pre>
                </div>

                <div class="buttons_PS">
                    <button class="done-btn" onclick="done_btn()"> Done </button>
                    <button class="download-btn" onclick="download_btn()">Download Receipt</button>
                </div>
            </div>
        </div>

        <!-----------------------footer section start---------------------------------->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>About us</h3>
                    <a href="../src/html/about us.html">About us</a>
                    <a href="#">Our community</a>
                </div>
                <div class="box">
                    <h3>Support</h3>
                    <a href="../src/html/Contact us.html">24 hours contact center</a>
                    <a href="#">FAQs</a>
                </div>
                <div class="box">
                    <h3>Terms and Conditions</h3>
                    <a href="#">General</a>
                    <a href="#">Copyright</a>
                </div>
                <div class="follow-us-container">
                    <h3>Follow Us</h3>
                    <a href="#"><img src="Images/facebook icon.png" alt="Facebook" id="social-links"></a>
                    <a href="#"><img src="Images/twitter icon.png" alt="Twitter" id="social-links"></a>
                    <a href="#"><img src="Images/instragram icon.png" alt="Instagram" id="social-links"></a>
                </div>
            </div>
            <h1 class="credit"><span>@ 2022 All Rights Reserved</span></h1>
        </section>
        <!-----------------------------End of the footer section------------------------------->

    </body>
</html>
