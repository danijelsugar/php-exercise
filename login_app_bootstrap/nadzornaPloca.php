<?php
    session_start();

    if(!isset($_SESSION["autoriziran"])){
        header("location: login.php");
    }

?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Hello, world!</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Edunova</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="login.php" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Login</a>
      </form>
    </div>
  </nav>

  <br />

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="hero-widget well well-sm">
          <div class="icon">
            <i class="glyphicon glyphicon-user"></i>
          </div>
          <div class="text">
            <var>3</var>
            <label class="text-muted">invited guests</label>
          </div>
          <div class="options">
            <a href="javascript:;" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i> Add a guest</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="hero-widget well well-sm">
          <div class="icon">
            <i class="glyphicon glyphicon-star"></i>
          </div>
          <div class="text">
            <var>614</var>
            <label class="text-muted">page likes</label>
          </div>
          <div class="options">
            <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i> View traffic</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="hero-widget well well-sm">
          <div class="icon">
            <i class="glyphicon glyphicon-tags"></i>
          </div>
          <div class="text">
            <var>73</var>
            <label class="text-muted">total orders</label>
          </div>
          <div class="options">
            <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i> View orders</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="hero-widget well well-sm">
          <div class="icon">
            <i class="glyphicon glyphicon-cog"></i>
          </div>
          <div class="text">
            <var>75%</var>
            <label class="text-muted">profile complete</label>
          </div>
          <div class="options">
            <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-wrench"></i> Edit profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>