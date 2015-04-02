          <div class="col-md-4">
            <div class="panel panel-default friends">
              <div class="panel-heading">
                <h3 class="panel-title">My Friends</h3>
              </div>
              <div class="panel-body">
                <ul>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                  <li><a class="thumbnail" href="profile.html"><img src="img/user.png"></a></li>
                </ul>
                <div class="clearfix"></div>
                <a class="btn btn-primary" href="#">View All Friends</a>
              </div>
            </div>

            <div class="panel panel-default groups">
              <div class="panel-heading">
                <h3 class="panel-title">Latest Groups</h3>
              </div>
              <div class="panel-body">

                <?php foreach ($groups as $group) :?>
                  <div class="group-item">
                    <img src="img/group.png">
                    <h4><a href="#"><?= $group->name ?></a></h4>
                    <p><?= $group->description ?></p>
                  </div>
                <?php endforeach ?>

                <div class="clearfix"></div>
                <a class="btn btn-primary" href="#">View All Groups</a>

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <footer>
      <div class="container">
        <p>Dobble Copyright &copy; 2015, All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="templates/js/bootstrap.js"></script>
    <!-- the next two script only need to load on photo tab... -->
    <script src="templates/js/ekko-lightbox.js"></script>
    <script>
      $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 
      $(function () {
  $('[data-hover="tooltip"]').tooltip()
})
    </script>
  </body>
</html>