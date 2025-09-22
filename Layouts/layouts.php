<?php
class Layouts {
    public function header($conf) {
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Astro v5.13.2">
      <title><?php echo $conf['site_name']; ?></title>
      <link href="<?php echo $conf['site_url']; ?>/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
   </head>
<?php
    }
    public function navbar($conf) {
?>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
         <div class="container-fluid">
            <a class="navbar-brand fw-bold text-primary" href="./"><?php echo $conf['site_name']; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active fw-bold' : ''; ?>" href="./">Home</a></li>
                  <li class="nav-item"><a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'signup.php') ? 'active fw-bold' : ''; ?>" href="signup.php">Sign Up</a></li>
                  <li class="nav-item"><a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'signin.php') ? 'active fw-bold' : ''; ?>" href="signin.php">Sign In</a></li>
               </ul>
               <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary" type="submit">Search</button>
               </form>
            </div>
         </div>
      </nav>
      <main class="container py-4">
<?php
    }

    public function banner($conf) {
?>
         <div class="p-5 mb-4 bg-gradient rounded-3 text-black" style="background: linear-gradient(135deg, #0d6efd, #6610f2);">
            <div class="container-fluid py-5">
               <h1 class="display-4 fw-bold">Welcome to <?php echo $conf['site_name']; ?></h1>
               <p class="col-md-8 fs-5">Build modern interfaces quickly with Bootstrap’s utilities and components. Customize this banner however you like.</p>
               <button class="btn btn-light btn-lg" type="button">Join Now</button>
            </div>
         </div>
<?php
    }
    public function content($conf) {
?>
         <div class="row g-4">
            <div class="col-md-6">
               <div class="card shadow-sm h-100">
                  <div class="card-body">
                     <h2 class="card-title">Fresh Layouts</h2>
                     <p class="card-text">Mix Bootstrap’s cards, grids, and utility classes for a fresh new look without heavy customization.</p>
                     <button class="btn btn-primary" type="button">Example button</button>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="card border-secondary h-100">
                  <div class="card-body">
                     <h2 class="card-title">Flexible Design</h2>
                     <p class="card-text">This section uses cards with shadows and borders instead of background blocks, giving a more modern, app-like style.</p>
                     <button class="btn btn-outline-secondary" type="button">Example button</button>
                  </div>
               </div>
            </div>
         </div>
<?php
    }
    public function form_content($conf, $ObjForm, $ObjFncs) {
?>
         <div class="row g-4">
            <div class="col-md-6">
               <div class="card bg-dark text-white h-100 shadow">
                  <div class="card-body">
                     <?php 
                        if(basename($_SERVER['PHP_SELF']) == 'signup.php') { 
                           $ObjForm->signup($conf, $ObjFncs); 
                        } else { 
                           $ObjForm->signin($conf, $ObjFncs); 
                        } 
                     ?>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="card border h-100 shadow-sm">
                  <div class="card-body">
                     <h2 class="card-title">Why Join?</h2>
                     <p class="card-text">Sign up to access exclusive features, or sign in if you already have an account. Simple, clean, and effective design.</p>
                     <button class="btn btn-outline-secondary" type="button">Learn More</button>
                  </div>
               </div>
            </div>
         </div>
<?php
    }
    public function footer($conf) {
?>
         <footer class="pt-4 mt-5 border-top text-center text-muted small">
            <p>&copy; <?php echo date("Y") . " {$conf['site_name']}"; ?>. All rights reserved.</p>
         </footer>
      </main>
      <script src="<?php echo $conf['site_url']; ?>/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   </body>
</html>
<?php
    }
}
