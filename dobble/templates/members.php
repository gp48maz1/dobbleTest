<?php include('includes/header.php'); ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
           <div class="members">
            <h1 class="page-header">Members</h1>

            <?php foreach ($users as $user) : ?>
            <div class="row member-row">
              <div class="col-md-3">
                <img src="img/user.png" class="img-thumbnail">
                <div class="text-center"><?php echo $user->username; ?></div>
              </div>
              <div class="col-md-3">
                <p><a href="#" class="btn btn-success btn-block"><i class="fa fa-users"></i> Add Friend</a></p>
              </div>
              <div class="col-md-3">
                <p><a href="#" class="btn btn-default btn-block"><i class="fa fa-envelope"></i> Send Message</a></p>

              </div>
              <div class="col-md-3">
                <p><a href="#" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> View Profile</a></p>

              </div>
            </div>
            <?php endforeach; ?>

           </div>
          </div><!-- col-md-8 end -->

<?php include('includes/footer.php'); ?>
