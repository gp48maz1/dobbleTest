<?php include('includes/header.php'); ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="page-header">Photos</h1>
            <ul class="photos gallery-parent">
              <?php foreach($stockPhotos as $stockPhoto) : ?>
              <?php $_SESSION['count']++; ?>
              <!-- potentially change the data-title and title to word number later -->
              <li><a href="img/stock/<?= $stockPhoto->name; ?>" data-title="Image <?php countPhotos(); ?>" data-footer="This is image <?php countPhotos(); ?>" data-toggle="lightbox" data-gallery="mygallery" data-parent=".gallery-parent" data-hover="tooltip" data-placement="top" title="This is image <?php countPhotos(); ?>"><img src="img/stock/<?= $stockPhoto->name; ?>" class="img-thumbnail"></a></li>
              <?php endforeach; ?>
            </ul>

            <div class="clearfix"></div>

            <h1 class="page-header">Random</h1>
            <ul class="photos gallery-parent">
              <li><a href="img/stock/sample1.jpg" data-title="Image One" data-footer="This is image 1" data-toggle="lightbox" data-gallery="mygallery" data-parent=".gallery-parent" data-hover="tooltip" data-placement="top" title="This is image one"><img src="img/stock/sample1.jpg" class="img-thumbnail"></a></li>
              <li><a href="img/stock/sample2.jpg" data-title="Image Two" data-footer="This is image 2" data-toggle="lightbox"  data-gallery="mygallery" data-parent=".gallery-parent" data-hover="tooltip" data-placement="top" title="This is image two"><img src="img/stock/sample2.jpg" class="img-thumbnail"></a></li>
              <li><a href="img/stock/sample3.jpg" data-title="Image Three" data-footer="This is image 3" data-toggle="lightbox"  data-gallery="mygallery" data-parent=".gallery-parent" data-hover="tooltip" data-placement="top" title="This is image three"><img src="img/stock/sample3.jpg" class="img-thumbnail"></a></li>
              <li><a href="img/stock/sample4.jpg" data-title="Image Four" data-footer="This is image 4" data-toggle="lightbox"  data-gallery="mygallery" data-parent=".gallery-parent" data-hover="tooltip" data-placement="top" title="This is image four"><img src="img/stock/sample4.jpg" class="img-thumbnail"></a></li>
              <li><a href="img/stock/sample5.jpg" data-title="Image Five" data-footer="This is image 5" data-toggle="lightbox"  data-gallery="mygallery" data-parent=".gallery-parent" data-hover="tooltip" data-placement="top" title="This is image five"><img src="img/stock/sample5.jpg" class="img-thumbnail"></a></li>
              <li><a href="img/stock/sample6.jpg" data-title="Image Six" data-footer="This is image 6" data-toggle="lightbox"  data-gallery="mygallery" data-parent=".gallery-parent" data-hover="tooltip" data-placement="top" title="This is image six"><img src="img/stock/sample6.jpg" class="img-thumbnail"></a></li>
            </ul>
          </div><!-- col-md-8 end -->

<?php include('includes/footer.php'); ?>