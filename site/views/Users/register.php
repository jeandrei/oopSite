<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register User!</h3>
  </div>
  <div class="panel-body">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="submit">        
    </form>
  </div>
</div>