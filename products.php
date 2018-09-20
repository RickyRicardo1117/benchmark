<?php
$page = 'Products';
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
    <!--
    <div class="slider-container">
      <div class="slider">
        <div><img src="images\canvas.jpg" alt=""> </div>
        <div><img src="images\alone-art-art-gallery-748778-optimized.jpg" alt=""></div>
        <div><img src="images\blueprint-triangle.jpg" alt=""></div>
      </div>
    </div>
  -->
    <div class="flex">




      <aside>
        <h3>Promotional</h3>
        <ul>
          <li onclick="modal('modal1')" >T-shirts</li>
          <li onclick="modal('modal2')" >Pens</li>
          <li onclick="modal('modal3')" >Mugs</li>
          <li onclick="modal('modal4')" >Key Chains</li>
          <li onclick="modal('modal5')" >Calendars</li>
          <li onclick="modal('modal19')" >Business Cards</li>
          <li onclick="modal('modal21')" >Magnets</li>
        </ul>

        <h3>Art Reproduction/Gicl&eacute;e</h3>
        <ul>
          <li onclick="modal('modal6')">Photos</li>
          <li onclick="modal('modal7')">Fine Art</li>
          <li onclick="modal('modal8')">Canvas</li>
          <li onclick="modal('modal9')">Custom Acrylic and Mounting</li>
          <li onclick="modal('modal18')">Print & Stick fabric</li>
        </ul>

        <h3>Signage</h3>
        <ul>
          <li onclick="modal('modal10')">Banners</li>
          <li onclick="modal('modal13')">Pop Up Banners</li>
          <li onclick="modal('modal11')">Yard Signs</li>
          <li onclick="modal('modal12')">Custom Signs</li>
        </ul>

        <h3>Name Badges, Stamps, and More</h3>
        <ul>
          <li onclick="modal('modal14')">Name Badges</li>
          <li onclick="modal('modal15')">Name Plates</li>
          <li onclick="modal('modal16')">Custom Stamps</li>
          <li onclick="modal('modal20')">Checks and deposit</li>
        </ul>
      </aside>


    <main class="featured-container" id="featured-items">

      <h2>Featured items</h2>
      <div class="featured-item">
        <img src="images\NFL-Magnet.jpg" alt="Magnets">
        <h4>Magnets</h4>
        <p>Whether it's your car or fridge, show off your design with custom magnets.</p>
      </div>
      <div class="featured-item">
        <img src="images\business-card-card-thumbnail.jpg" alt="Magnets">
        <h4>Business Cards</h4>
        <p>Order high quality business cards available in multiple paper stocks. We offer linen, matte, glossy, super thick, colored edges and much more.</p>
      </div>
      <div class="featured-item">
        <img src="images/pens.jpg" alt="Magnets">
        <h4>Pens</h4>
        <p>Pens are always needed and in constant use, so why not us them to promote your brand or company. Available in multiple colors and inks. Contact now to order.</p>
      </div>
      <div class="featured-item">
        <img src="images/t-shirt.jpg" alt="Magnets">
        <h4>T-shirts</h4>
        <p>Our t-shirts come in an array of colors with multiple sizes to show off your unique design. Create a shirt for one, or for a whole company!</p>
      </div>
      <div class="featured-item">
        <img src="images/stamps.jpg" alt="Magnets">
        <h4>Stamps</h4>
        <p>Custom stamps that showcases off perfect calligraphy, a stylish logo, or a stamp of your favorite dog. Get in touch now to see what we can do for you.</p>
      </div>
      <div class="featured-item">
        <img src="images/name-badge.jpg" alt="Magnets">
        <h4>Name Badges</h4>
        <p>Create professional name Badges that can be attached in a variety of ways in a variety of sizes. Learn more today.</p>
      </div>
    </main>




<!--All modal Content-->
    <div class="modal" id="modal1">
      <div class="modal-container">
        <div class="modal-header">
          <h4>T-shirts</h4>
          <span class="close">&#x2715;</span>

        </div>
        <div class="modal-content">
          <img src="images\t-shirt.jpg" alt="T-shirt">
          <p>Our t-shirts come in an array of colors with multiple sizes to show off your unique design. Create a shirt for one, or for a whole company!</p>
        </div>
      </div>
    </div>
    <div class="modal" id="modal2">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Pens</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images/pens.jpg" alt="Pens">
          <p>Pens are always needed and in constant use, so why not us them to promote your brand or company. Available in multiple colors and inks. Contact now to order. <br><span class="link">More Info</span> </p>
        </div>
      </div>
    </div>
    <div class="modal" id="modal3">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Mugs</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images/mug.jpg" alt="Mug">
          <p>Mugs make an excellent gift and we can add almost any photo to them, from a photo of your dog to a heart warming letter, contact us now to see what we can do for you.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal4">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Key Chains</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="" alt="No Photo">
          <p>HI!</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal5">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Calendars</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\calendar.jpg" alt="Calendars">
          <p>Calendars are great way to showcase your company in an easy nonintrusive effective way. Learn more today.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal6">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Photos</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\alone-art-art-gallery-748778-optimized.jpg" alt="Art Gallery" width="200" height="200">
          <p>Photo prints are available in multiple sizes at super high quality. Send us one photo, or an album, and we'll have them printed out in no time.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal7">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Fine Art</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images/fine-art.jpg" alt="Stacked art">
          <p>Have your fine art printed on a high quality canvas or on acrylic matte paper.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal8">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Canvas</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\fromBenchmark\canvas-split-optimized.jpg" alt="Canvas art">
          <p>High quality stretch-framed canvas prints that'll improve any space.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal9">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Acrylic and mounting</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\fromBenchmark\Direct-Acrylic-Standoffs-Corner-optimized.jpg" alt="Acrylic photo">
          <p>Custom acrylic panels produce vivid visuals unlike any other print. The high-gloss glass offers a unique finish that lights up any room.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal18">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Print & Stick Fabric</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="" alt="Need photo">
          <p>Our print and stick fabric prints are as easy to install as stickers.<br> Available in multiple sizes.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal10">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Banners</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="" alt="Need photo">
          <p>Banners are a great way to advertise at an event or storefront. Show off your store with a personlized banner that include any size grommits and long lasting welded edges</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal19">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Business Cards</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\business-card-card-thumbnail.jpg" alt="Business Cards">
          <p>Order high quality business cards available in multiple paper stocks. We offer linen, matte, glossy, super thick, colored edges and much more.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal11">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Yard signs</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\yard-signs.jpg" alt="Yard signs">
          <p>Yard signs are a simple and convenient way to get the message across. <br>Available in multiple sizes.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal12">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Custom signs</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\custom-signs.jpg" alt="Wall signs">
          <p>Call now for our full list of signage ranging from decals, yard signs, banners and more!</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal13">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Pop Up Banners</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\fromBenchmark\bannerWithStand.jpg" alt="No Photo">
          <p>Enjoy our large selection of pop up banners that are easy to assemble and come in multiple sizes. <br>Stand or banner available to purchase separately. </p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal14">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Name Badges</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\name-badge.jpg" alt="Name Badge">
          <p>Create professional name Badges that can be attached in a variety of ways in a variety of sizes. Learn more today.<br>Available engraved and colored <br> <span class="link"><a href="images\flyers\flyer name bages.pdf" target="_blank">More info</a></span>  </p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal15">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Name Plates</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\name-plate.jpg" alt="Name Plate">
          <p>We offer door and free standing desk name plates for easy identification. <br>Available engraved and colored </p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal16">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Custom Stamps</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\stamps.jpg" alt="Stamps">
          <p>Custom stamps that showcases off perfect calligraphy, a stylish logo, or a stamp of your favorite dog. Get in touch now to see what we can do for you.</p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal20">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Checks and deposit</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\fromBenchmark\checks.jpg" alt="Checks">
          <p>Our checks come with advance security features, fast service, and basic typsetting and logos all at a competitive price. Find out how easy it is to order your custom checks today.
          <br> <span class="link"><a href="images\flyers\Laser Pantograph & Color Choices.pdf" target="_blank">More info on Laser Pantograph & Color Choices</a> </span>
          <br> <span class="link"><a href="images\flyers\Laser Pantograph & Color Choices.pdf" target="_blank">Sample check with pricing and options</a> </span>
          </p>
        </div>
      </div>
    </div>

    <div class="modal" id="modal21">
      <div class="modal-container">
        <div class="modal-header">
          <h4>Magnets</h4>
          <span class="close">&#x2715;</span>
        </div>
        <div class="modal-content">
          <img src="images\nfl-magnets-thumbnail.jpg" alt="Magnets">
          <p>Whether it's your car or fridge, show off your design with custom magnets.
          <br> <span class="link"><a href="images\flyers\Business Card Magnet Flyer (2).pdf" target="_blank">Business card magnets</a> </span>
          <br> <span class="link"><a href="images\flyers\NFL Magnet.pdf" target="_blank">NFL Magnets</a> </span>
          </p>
        </div>
      </div>
    </div>


  </div>



   <?php include 'include/footer.php'; ?>
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script>
    //modals
      function modal(id) {
        var modalContent = document.getElementById(id)
        modalContent.style.display = 'flex';
        //close
        var span = document.getElementsByClassName("close");
        span.onclick = function() {
          modalContent.style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == modalContent) {
              modalContent.style.display = "none";
          }
        }
      }
      //close modal

    </script>
  </body>
</html>
