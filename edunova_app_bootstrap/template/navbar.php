<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a  class="navbar-brand <?php if($putanjaAPP . 'index.php' === $_SERVER['PHP_SELF']) echo 'active'; ?>" href="<?php echo  $putanjaAPP; ?>index.php"><i class="fas fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <?php 
      if(isset($_SESSION[$idAPP."o"])):
      stavkaIzbornika($putanjaAPP, "privatno/dashboard.php", "Dashboard");
      stavkaIzbornika($putanjaAPP, "privatno/PDO.php", "PDO");
      endif;
      stavkaIzbornika($putanjaAPP, "about-us.php", "About Us");
      stavkaIzbornika($putanjaAPP, "contact.php", "Contact");

      ?>
      </ul>
      <ul class="navbar-nav mr-right">

        <?php if(isset($_SESSION[$idAPP."o"])): ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo $putanjaAPP; ?>logout.php">Logout</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo $putanjaAPP; ?>login.php">Login</a></li>
        <?php endif; ?>
      </ul>
      </div>
    </nav>
  </div>