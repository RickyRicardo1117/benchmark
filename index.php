<?php
//git testtest
$page = 'Home'
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

    <header>
      <div class="go-benchmark-container">
        <div class="go-benchmark">
          <p><a href="http://www.go-benchmark.com/" target="_blank" >www.go-benchmark.com</a></p>
        </div>
      </div>
      <nav>

        <div class="logo">

          <a href="index.php"><img src="images/littleManSmall.png" alt="Benchmark little guy"></a>
          <a href="index.php"><h1>Benchmark</h1></a>

        </div>

        <ul>
          <a href="#"><li class="<?php if ($page=='Home') {echo 'active';} ?>">Home</li></a>
          <a href="printing.php"><li>Printing</li></a>
          <a href="products.php"><li>Products</li></a>
          <a href="about.php"><li>About</li></a>
          <a href="contact.php"><li>Contact</li></a>
        </ul>

      </nav>

      <div class="center">
        <h2>Blueprinting <br>
        & <br>
        Office Supplies
        </h2>

        <h3>941-366-1986</h3>

        <a href="contact.php"><button type="button" name="contact-button">Contact Now</button></a>
      </div>

    </header>

    <main>

      <div class="summary">

        <div class="summary-box">
          <img src="images/icons8-print-100.png" alt="Printer Icon">
          <div class="summary-box-words">
            <h4>Printing</h4>
            <p>Whether you're working on a large-scale project requiring precision or simply need a new letterhead, we can help. Thanks to our KIP 7970, KIP 9000, and KIP 940 machines, we produce high definition, professional-quality prints at lightning speed.</p>
          </div>
        </div>

        <div class="summary-box">
          <img src="images\icons8-drawing-compass-100.png" alt="Compass icon">
          <div class="summary-box-words">
            <h4>Office Supplies</h4>
            <p>We offer over 30,000 office supplies for you and your employees. Keep you office stocked and ready for business at all times thanks to free, next-day delivery, or peruse our selection of furniture to spruce up the workplace and breakroom.</p>
          </div>
        </div>

        <div class="summary-box">
          <img src="images\icons8-wallpaper-roll-100.png" alt="Wide Format printing icon">
          <div class="summary-box-words">
            <h4>Wide Format Printing</h4>
            <p>Poster-sized large scale color prints are now available! Wide format projects can be created from any image in digital format or original print provided by you. Our high quality scanners faithfully reproduce every line with stunning clarity.</p>
          </div>
        </div>
      </div>

      <div class="shortcut">

        <a href="http://localhost/benchmark/products.php#modal19">
          <div class="shortcut-box" id="shortcut-cards">
            <?php // FIXME: fix link not working on entire box ?>
            <p>Business Cards</p>
          </div>
        </a>

        <a href="http://localhost/benchmark/printing.php#printing">
          <div class="shortcut-box" id="shortcut-blueprints">
            <p>Blueprints</p>
          </div>
        </a>

        <a href="http://localhost/benchmark/products.php#modal7">
          <div class="shortcut-box" id="shortcut-fineart">
            <p>Fine Art</p>
          </div>
        </a>

        <a href="http://localhost/benchmark/products.php#modal6">
          <div class="shortcut-box" id="shortcut-photoprints">
            <p>Photo Prints</p>
          </div>
        </a>

      </div>

      <div class="contact-bar">
        <p>Need a print? Let's get started!</p>
        <a href="contact.php"><button type="button" name="button">CONTACT NOW</button></a>
      </div>

      <div class="home-about">
        <h4><b>About Us</b></h4>
        <p>Benchmark Blueprinting is a family owned business that has proudly been serving the Manatee and Sarasota Counties since 1986.  We are dedicated to bringing you the highest quality products at the best possible price, and pride ourselves on our excellent customer service. Contact us to see how we can help you and your business!
        </p>
        <a href="#"><button type="button" name="button">Contact Now</button> </a>
      </div>
    </main>
    <?php include 'include/footer.php'; ?>
  </body>
</html>
