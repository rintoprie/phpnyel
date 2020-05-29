          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="float-right">
                    <a href="user.php?act=add" class="btn btn-primary">New User</a>
                  </div>
                  <h4 class="card-title">Users</h4>
                  <p class="card-description">
                    Record of Users
                  </p>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Username</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($users as $user) {
                            ?>
                            <tr>
                              <td><?php echo $user['id']; ?></td>
                              <td><a href="user.php?act=view&id=<?php echo $user['id']; ?>"><?php echo $user['username']; ?></a></td>
                              <td><?php echo $user['email']; ?></td>
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