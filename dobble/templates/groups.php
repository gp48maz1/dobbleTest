<?php include('includes/header.php'); ?>

    <section>
      <div class="container">
        <div class="row">
          
          <div class="col-md-8">
            <div class="groups">
              <h1 class="page-header">Groups</h1>

              <?php foreach( $groups as $group) : ?>
              <div class="group-item">
                <img src="img/group.png">
                <h4><a href="#"><?= $group->name; ?></a></h4>
                <p><?= $group->description; ?></p>
                <p><a href="#" class="btn btn-default">Join Group</a></p>
              </div>
              <div class="clearfix"></div>
              <?php endforeach; ?>

            </div>
          </div><!-- col-md-8 end -->

<?php include('includes/footer.php'); ?>
