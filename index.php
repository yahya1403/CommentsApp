<html>
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container jumbotron mt-3">
      <h3 class="text-center">Sign Up</h3>
        <h5 class="text-center">Already have an account <a class="text-primary" href="signin.php">Sig in</a></h5>
          <div class="form-outline mb-4">
              <label class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg js-email" />
          </div>
          <div class="form-outline mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control form-control-lg js-pass" />
              <p class="text-secondary">Note:-Charecters length:6 to 15</p>
          </div>
          <div class="form-outline mb-3">
              <label class="form-label">Secret Code</label>
              <input type="text" class="form-control form-control-lg js-secret" />
              <p class="text-secondary">Note:-Charecters length:6 to 15</p>
          </div>
          <div class="text-center"><button type="button" class="btn btn-primary js-signup"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">
              <span class="glyphicon">&#xe161;</span>Sign-up</button>
          </div>
    </div>
    <script src="assets/js/custom.js"></script>
</body>
</html>
