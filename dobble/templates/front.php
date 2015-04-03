<?php include('includes/header.php'); ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-heading">
                <?php if(!isLoggedIn()) : ?>
                  <h3 class="panel-title">Sign In / Register so you can make a post!</h3>
                <?php else : ?>
                  <h3 class="panel-title"><?= getUser()['username']; ?> feel free to make a post!</h3>
                <?php endif ?>
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

            <!-- List of the various posts -->
            <?php foreach($posts as $post) : ?>
            <div class="panel panel-default post">
              <div class="panel-body">
                <div class="row">

                  <div class="col-sm-2">
                    <a class="post-avatar thumbnail" href="profile.html"><img src="img/user.png"><div class="text-center"><?= $post->username; ?></div></a>
                    <div class="likes text-center">7 Likes</div>
                  </div><!-- col-sm-2 end -->

                  <div class="col-sm-10">

                    <div class="bubble">
                      <div class="pointer">
                        <p><?= $post->body; ?></p>
                      </div>
                      <div class="pointer-border"></div>
                    </div><!-- bubble end -->

                    <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a> </p>
                    
                    <div class="comment-form">
                      <form class="form-inline">
                        <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Comment">
                        </div>
                        <button type="submit" class="btn btn-default">Add</button>
                      </form>
                    </div><!-- comment form end -->
                    <div class="clearfix"></div>

                    <div class="comments">
                      <?php foreach($replies as $reply) : ?>
                      <?php if($reply->post_id == $post->id) : ?>
                        <div class="comment">
                          <a class="comment-avatar pull-left" href="#"><img src="img/user.png"></a>
                          <div class="comment-text">
                            <p><?= $reply->reply; ?></p>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      <?php else : ?>
                      <?php endif; ?>
                      <?php endforeach; ?>
                    </div>

                  </div>

                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- the various posts -->

          </div><!-- col-md-8 end -->

<?php include('includes/footer.php'); ?>

