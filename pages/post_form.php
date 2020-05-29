          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Post Detail</h4>
                  <p class="card-description">
                    View/Edit Detail
                  </p>
                  <form action="post.php?act=<?php echo $act;?>" method="post" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputTitle">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Title" value="<?php echo isset($post['title'])?$post['title']:''; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBody">Body</label>
                      <textarea name="body" class="form-control" id="exampleTextarea1" rows="6"><?php echo isset($post['body'])?$post['body']:''; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAuthor">Author</label>
                      <input type="text" name="author" class="form-control" id="exampleInputAuthor" placeholder="Author" value="<?php echo isset($post['author'])?$post['author']:''; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputModified">Modified</label>
                      <input type="text" name="modified" class="form-control" id="exampleInputModified" placeholder="yyyy-mm-dd hh:mm:ss" value="<?php echo isset($post['modified'])?$post['modified']:''; ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo isset($post['id'])?$post['id']:''; ?>"/>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <a href="post.php" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>