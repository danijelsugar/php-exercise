<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Login</a>
    </form>
  </div>
</nav>

<div class="container">
  <form class="form-horizontal" role="form" method="POST" action="autoriziraj.php">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h2>Please Login</h2>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="form-group has-danger">
          <label class="sr-only" for="user">E-Mail Address</label>
          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <input type="text" name="user" class="form-control" id="user"
            placeholder="user-name" >
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="sr-only" for="password">Password</label>
          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <input type="password" name="password" class="form-control" id="password"
            placeholder="Password" >
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-control-feedback">
          <span class="text-danger align-middle">
            <!-- Put password error message here -->    
          </span>
        </div>
      </div>
    </div>
    <div class="row" style="padding-top: 1rem">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
      </div>
    </div>
  </form>
</div>

<div class="container text-center">
  <p class="text-warning">
    <?php

    if(isset($_GET["poruka"])){
      switch($_GET["poruka"]){
        case "1":
          echo "Neispravna kombinacija korisničkog imena i lozinke";
          break;
      case "2":
        echo "Unesite korisničko ime i lozinku";
        break;
      default: 
        echo "";
        break;
  }
}

  ?>
</p> 
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>