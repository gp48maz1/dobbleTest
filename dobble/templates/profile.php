<?php include('includes/header.php'); ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="profile">
              <h1 class="page-header">John Doe</h1>
              <div class="row">
                <div class="col-md-4">
                  <img src="img/user.png" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                  <ul>
                    <li><strong>Name:</strong> John Doe</li>
                    <li><strong>Email Address: </strong>johndoe@gmail.com</li>
                    <li><strong>City: </strong>Boston</li>
                    <li><strong>State: </strong>Massachusetts</li>
                    <li><strong>Gender:</strong> Male</li>
                    <li><strong>Profession: </strong>Web Developer</li>
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
