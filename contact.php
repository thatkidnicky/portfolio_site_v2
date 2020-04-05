<?php
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/SMTP.php';
require_once 'scripts/mail.php';

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $subject = trim($_POST['subject']);
    $email = trim($_POST['email']);
    $msg = trim($_POST['msg']);

    if(!empty($name) && !empty($email) && !empty($subject) && !empty($msg)){
        contactMail($name, $email, $subject, $msg);
    }else{
        $message = 'Fill the required feilds please';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nick Shahfazlollahi</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://kit.fontawesome.com/066bb77ccc.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="social hidden">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
        </div>
    <i class="burger fas fa-bars"></i>
    <div class="logoSection">
        <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 532.57 290"><defs><style>.cls-1{fill:white;stroke:white;}.cls-1,.cls-2,.cls-3{stroke-miterlimit:10;}.cls-2,.cls-3{fill:none;stroke-width:7px;}.cls-2{stroke:white;}.cls-3{stroke:white;}.cls-4{font-size:34px;fill:white;font-family:Helvetica ;letter-spacing:0.5em;}.cls-5{font-size:13px;letter-spacing:0.4em;}.cls-6{letter-spacing:0.35em;}.cls-7{letter-spacing:0.42em;}.cls-8{letter-spacing:0.4em;}.cls-9{letter-spacing:0.36em;}</style></defs><title>portfolio_logo</title><g id="signature"><path class="cls-1" d="M19.55,220.24l91.31-89.1s21-20.06,9.54,7.13L80.87,208.61s-5.58,15.55,8.44,4.17l143-145.54a6.5,6.5,0,0,0,1.77-3.37c.31-1.71.32-3.39-2.73-2.72a10.13,10.13,0,0,0-3.42,1.48l-88,57.47s-3.94,3-.33,4.46a6.44,6.44,0,0,0,2.21.44l109.66,4.47s11.9.84,1.79,8.82l-113.14,73c-2.17,1.17-1.34,3.18.68,2.44l210-94.28S156.29,218,135.58,218.71c-4.55.16-6.91-5.14-3.3-7.9,16.53-12.64,55-40.47,111.4-72.45a2.26,2.26,0,0,0-1.1-4.24c-23.18-.1-84.78-3.38-104-5.46a6.59,6.59,0,0,1-3.82-11.36l.2-.18a16.49,16.49,0,0,1,2.07-1.56l88.08-57.69a17.61,17.61,0,0,1,8.47-2.93c4-.27,8.35,1,6.28,8.22A19.26,19.26,0,0,1,235,71.3L98.58,212.37c-6.92,7-11.07,8.22-14,9.72-4.92,2.51-11.2,3.93-10.84-5.43a21,21,0,0,1,2.58-9.15l37.31-69.2a.7.7,0,0,0-1.08-.85Z" transform="translate(-4.1 -3.72)"/></g><g id="square"><line id="left" class="cls-2" x1="3.5" y1="3.5" x2="3.5" y2="287.55"/><line id="top" class="cls-2" y1="3.5" x2="287.35" y2="3.5"/><line id="bottom" class="cls-3" y1="287.55" x2="285.65" y2="287.55"/><line id="right_upper" class="cls-2" x1="283.85" y1="2.6" x2="283.85" y2="127.79"/><line id="right_lower" class="cls-2" x1="283.85" y1="169.87" x2="283.85" y2="291.06"/></g><g id="name"><text class="cls-4" transform="translate(301.66 194.15)">NICK <tspan class="cls-5"><tspan x="0" y="24">SHAH</tspan><tspan class="cls-6" x="54.12" y="24">F</tspan><tspan class="cls-7" x="65.3" y="24">A</tspan><tspan class="cls-8" x="78.52" y="24">Z</tspan><tspan class="cls-9" x="90.7" y="24">L</tspan><tspan class="cls-8" x="101.93" y="24">OLLAHI</tspan></tspan></text></g></svg>        
    </div>
    
    <nav class="navContainer hide">
        <ul class="nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="portfolio.php">PORTFOLIO</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
    </header>
        
    <div class="contactForm">

<div class="contactInfo">
  <h1 class="bigText">Lets get in touch!</h1>
  <p class="littleText">Fill out the form below to contact me and I'll get back to you soon.</p>
</div>

    <form action="submit" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name..">
      
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Your email..">
      
      <label for="name">Subject</label>
      <input type="phone" id="phone" name="subject" placeholder="Subject line...">
      
      <label for="message">Message</label>
      <textarea id="message" name="msg" placeholder="Write me a message.."></textarea>
      <button name='submit'>send</button>
    </form>
</div>


        <footer>
        <img class="footerLogo" src="images/portfolio_logo.svg" alt="Portfolio Logo">
    <div class="copySoc">
        <div class="social">
            <a href="https://www.instagram.com/thatkidnicky/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/nick-shahfazlollahi/"><i class="fab fa-linkedin"></i></a>
        </div>
        <h5 class="copyright">Nick Shahfazlollahi©. 2019 All Rights Reserved</h5>
    </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>