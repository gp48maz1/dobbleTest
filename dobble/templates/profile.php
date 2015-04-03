<?php include('includes/header.php'); ?>

    <?php 
      if(!isLoggedIn())
        redirect('index.php');
    ?>
  
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="profile">
              <h1 class="page-header"><?= getUser()['name']; ?></h1>
              <div class="row">
                <div class="col-md-4">
                  <img src="img/user.png" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                  <ul>
                    <li><strong>Name:</strong> <?= getUser()['name']; ?></li>
                    <li><strong>Email Address: </strong><?= getUser()['email']; ?></li>
                    <li><strong>About: </strong><?= getUser()['about']; ?></li>
                    <li><strong>State: </strong><?= getUser()['state']; ?></li>
                    <li><strong>Gender:</strong> <?= getUser()['gender']; ?></li>
                    <li><strong>Profession: </strong><?= getUser()['profession']; ?></li>
                  </ul>

                </div>
              </div>
              <br></br>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Profile Wall</h3>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Write on the wall"></textarea>
                  </div>
                
                  <button type="submit" class="btn btn-default">Submit</button>
                  <div class="pull-right">
                    <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Text</button>
                    <button type="button" class="btn btn-default"><i class="fa fa-file-image-o"></i> Image</button>
                    <button type="button" class="btn btn-default"> <i class="fa fa-file-video-o"></i> Video</button>
                  </div>
                  </div>
                </form>        
              </div>
            </div>
                </div>
              </div>
            </div>
          </div><!-- col-md-8 end -->

<?php include('includes/footer.php'); ?>
