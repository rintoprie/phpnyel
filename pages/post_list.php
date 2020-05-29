          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="float-right">
                    <a href="post.php?act=add" class="btn btn-primary">New Post</a>
                  </div>
                  <h4 class="card-title">Posts</h4>
                  <p class="card-description">
                    Record of Posts
                  </p>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Author</th>
                          <th>Modified</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($posts as $post) {
                            ?>
                            <tr>
                              <td><a href="post.php?act=view&id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></td>
                              <td><?php echo substr($post['body'], 0, 100).'...'; ?></td>
                              <td><?php echo $post['author']; ?></td>
                              <td><?php echo $post['modified']; ?></td>
                            </tr>
                            <?php
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>