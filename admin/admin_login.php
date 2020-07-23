<?php
include '../link.inc.php';
?>
<!-- <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
      <img src="logo.png" class="img-fluid" width="300" alt="Online Examination System in PHP" />
  </div> -->

  <div class="container">
      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-top:20px;">


          <div class="card">
            <div class="card-header">Admin Login</div>
            <div class="card-body">
              <form method="post" id="admin_login_form">
                <div class="form-group">
                  <label>Enter Email Address</label>
                  <input type="text" name="admin_email_address" id="admin_email_address" class="form-control" />
              </div>
              <div class="form-group">
                  <label>Enter Password</label>
                  <input type="password" name="admin_password" id="admin_password" class="form-control" />
              </div>
              <div class="form-group">
                  <input type="hidden" name="page" value="login" />
                  <input type="hidden" name="action" value="login" />
                  <input type="submit" name="admin_login" id="admin_login" class="btn btn-info" value="Login" />
              </div>
          </form>
          
      </div>
  </div>

</div>
<div class="col-md-3">

</div>
</div>
</div>
