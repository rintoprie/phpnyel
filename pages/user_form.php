          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Detail</h4>
                  <p class="card-description">
                    View/Edit Detail
                  </p>
                  <form action="user.php?act=<?php echo $act;?>" method="post" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Username" value="<?php echo isset($post['username'])?$post['username']:''; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputAuthor" placeholder="Email" value="<?php echo isset($post['email'])?$post['email']:''; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword">
                    </div>
                    <input type="hidden" name="id" value="<?php echo isset($post['id'])?$post['id']:''; ?>"/>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <a href="post.php" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>