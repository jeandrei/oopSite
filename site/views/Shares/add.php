<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something!</h3>
  </div>
  <div class="panel-body">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label for="title">Share Tittle</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Share Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="link">Share Link</label>
            <input type="text" name="link" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="submit">
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>