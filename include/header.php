<?php


 ?>

<header>
  <div class="go-benchmark-container">
    <div class="go-benchmark">
      <p><a href="http://www.go-benchmark.com/" target="_blank" >www.go-benchmark.com</a></p>
    </div>
  </div>
  <nav>

    <div class="logo">

      <a href="index.php"><img src="images/littleManSmall.png" alt="Benchmark little guy" width="80"; ></a>
      <a href="index.php"><h1>Benchmark</h1></a>

    </div>

    <ul>
      <a href="index.php"><li class="<?php if ($page=='Home') {echo 'active';} ?>">Home</li></a>
      <a href="printing.php"><li class="<?php if ($page=='Printing') {echo 'active';} ?>">Printing</li></a>
      <a href="products.php"><li class="<?php if ($page=='Products') {echo 'active';} ?>">Products</li></a>
      <a href="about.php"><li class="<?php if ($page=='About') {echo 'active';} ?>">About</li></a>
      <a href="contact.php"><li class="<?php if ($page=='Contact') {echo 'active';} ?>">Contact</li></a>
    </ul>

  </nav>

  <div class="center">
    <h1><?php echo $page; ?></h1>
  </div>
</header>
