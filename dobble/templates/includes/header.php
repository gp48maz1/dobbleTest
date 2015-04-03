<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photos: Dobble Social Network</title>
    <!-- Bootstrap core CSS -->
    <link href="templates/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="templates/css/ekko-lightbox.css" rel="stylesheet">
    <link href="templates/css/font-awesome.css" rel="stylesheet">
    <link href="templates/css/style.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="container">
        <img src="img/logo.png" class="logo">

        <?php if(!isLoggedIn()) : ?>
          <form class="form-inline" method="post" action="login.php">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail3">UserName</label>
              <!-- removed type="email", which is a nice html5 validation feature -->
              <input name= "username" class="form-control" id="exampleInputEmail3" placeholder="Username">
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword3">Password</label>
              <input name= "password" type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
            </div>
            <button type="submit" name="do_login" class="btn btn-default">Sign in</button><br>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
          </form>
        <?php else : ?>
          <form role="form-inline" method="post" action="logout.php">
            <input type="submit" name="do_logout" class="btn btn-default" value="Logout" />
          </form>
        <?php endif; ?>

      </div>
    </header>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="groups.php">Groups</a></li>
            <li class="active"><a href="photos.php">Photos</a></li>
            <?php if(isLoggedIn()) : ?>
              <li><a href="profile.php">Profile</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>