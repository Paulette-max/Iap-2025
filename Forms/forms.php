<?php
class forms {
    public function signup($conf, $ObjFncs){
      $err = $ObjFncs->getMsg('errors');
      print $ObjFncs->getMsg('msg');
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white text-center">
          <h3 class="mb-0">Create Your Account</h3>
        </div>
        <div class="card-body p-4">
          <form action="" method="post" autocomplete="off">
            <div class="mb-3">
              <label for="fullname" class="form-label fw-bold">Full Name</label>
              <input type="text" class="form-control" id="fullname" name="fullname" maxlength="50" 
                     placeholder="John Doe"
                     value="<?php echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''; ?>" required>
              <?php if(isset($err['fullname_error'])) { ?>
                <div class="alert alert-danger mt-2" role="alert"><?php echo $err['fullname_error']; ?></div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label fw-bold">Email address</label>
              <input type="email" class="form-control" id="email" name="email" maxlength="100" 
                     placeholder="you@example.com"
                     value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>
              <?php if(isset($err['mailFormat_error'])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $err['mailFormat_error']; ?></div>
              <?php } ?>
              <?php if(isset($err['mailDomain_error'])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $err['mailDomain_error']; ?></div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" class="form-control" id="password" name="password" 
                     placeholder="••••••••" 
                     value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''; ?>" required>
              <?php if(isset($err['password_error'])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $err['password_error']; ?></div>
              <?php } ?>
            </div>
            <div class="d-grid">
              <?php $this->submit_button('Sign Up', 'signup'); ?>
            </div>
            <p class="mt-3 text-center">
              Already have an account? <a href='signin.php' class="text-decoration-none">Login</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    }
    private function submit_button($value, $name){
?>
        <button type='submit' class="btn btn-primary btn-lg" name='<?php echo $name; ?>'>
          <?php echo $value; ?>
        </button>
<?php
    }
    public function signin($conf, $ObjFncs){
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-success text-white text-center">
          <h3 class="mb-0">Welcome Back</h3>
        </div>
        <div class="card-body p-4">
          <form method="post" autocomplete="off">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="you@example.com">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="••••••••">
            </div>
            <div class="d-grid">
              <?php $this->submit_button('Sign In', 'signin'); ?>
            </div>
            <p class="mt-3 text-center">
              Don’t have an account? <a href='signup.php' class="text-decoration-none">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    }
}
