<?php
$page = 'Contact'

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
       <h4>For large format prints email <a href="mailto:plots@go-benchmark.com">Plots@go-benchmark.com</a>. For other related printing services such as canvas prints, banners, sign and more, contact <a href="mailto:steve@go-benchmark.com">Steve@go-benchmark.com</a></h4>
     </div>

     <form class="contact-form" action="contactSuccess.php" method="post">
       <input type="text" name="name" value="" placeholder="Name" required>
       <input type="email" name="email" value="" placeholder="Email" required>
       <input type="text" name="subject" value="" placeholder="Subject/Project Name" required>
       <?php // FIXME: weird bug on click inside message area ?>
       <textarea name="message" rows="8" cols="80" placeholder="Message" required></textarea>
       <input type="Submit" name="wide" value="Contact about wide format printing">
       <input type="Submit" name="printing" value="Contact about Custom Printed Products">
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
