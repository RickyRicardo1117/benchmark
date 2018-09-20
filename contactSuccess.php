<?php

$page = 'Contact';





if (isset($_POST["wide"])) {

  $fullName = filter_input(INPUT_POST, 'name');
  $email = filter_input(INPUT_POST, 'email');
  $subject = filter_input(INPUT_POST, 'subject');
  $message = filter_input(INPUT_POST, 'message');
  $emailToJohn = filter_input(INPUT_POST, 'wide');
  $emailToSteve = filter_input(INPUT_POST, 'printing');
  $mailBody = "Name: ".$fullName."\nEmail: ".$email."\n\n".$message;
  mail("plots@go-benchmark.com", $subject, $mailBody,"From: $fullName <$email>");
}

if (isset($_POST["printing"])) {

  $fullName = filter_input(INPUT_POST, 'name');
  $email = filter_input(INPUT_POST, 'email');
  $subject = filter_input(INPUT_POST, 'subject');
  $message = filter_input(INPUT_POST, 'message');
  $emailToJohn = filter_input(INPUT_POST, 'wide');
  $emailToSteve = filter_input(INPUT_POST, 'printing');
  $mailBody = "Name: ".$fullName."\nEmail: ".$email."\n\n".$message;
  mail("steve@go-benchmark.com", $subject, $mailBody,"From: $fullName <$email>");
}



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Benchmark Blueprinting</title>

     <meta name="description" content="Fast, convenient printing of blueprints, fine art and photos. We also deliver!">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="shortcut icon" type="image/png" href="images/Favicon.png">
     <link rel="stylesheet" href="stylesheets/style.css">

     <!--Fonts-->
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,400,300i,300|Source+Serif+Pro:600|Source+Sans+Pro" rel="stylesheet">

   </head>
   <body>

     <?php include 'include/header.php'; ?>
     <div class="contact-header">
       <h2>Contact now for a free quote!</h2>
       <h3>Call us at 941-366-1986</h3>
     </div>

     <form class="contact-form" action="" method="post">
       <p>Success, we'll be getting in touch with you soon!</p>
    </form>

    <div class="fixed-title-background">
      <div class="fixed-title">
        <h3>Come and visit!</h3>
      </div>
    </div>



    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3543.892297441973!2d-82.53400748455157!3d27.347835447804993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c3407797e221d5%3A0xa8a46590bf7bbbc1!2sBenchMark+Blueprinting%2C+Inc.!5e0!3m2!1sen!2sus!4v1534543666727"  frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
     <?php include 'include/footer.php'; ?>


   </body>
 </html>
