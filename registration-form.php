<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
  </style>
</head>

<body>

  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
        </div>

        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mb-0"><h1>Register</h1></p>
            </div>

            <form action="register.php" method="POST">
            <!--Username--> 
            <div class="form-outline mb-4">
              <input type="text" id="username" name="username" class="form-control form-control-lg"
                placeholder="Enter username" autocomplete="off" required/>
            </div>

            <!--Email Input--> 
            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" autocomplete="off" required/>
            </div>
  
            <!--Password Input-->            
            <div class="form-outline mb-3">
              <input type="password" id="password" name="password" class="form-control form-control-lg"
                placeholder="Enter your password" autocomplete="off" required/>
            </div>

            <!--Confirm Password Input-->            
            <div class="form-outline mb-3">
              <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg"
                placeholder="Confirm your password" autocomplete="off" required/>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login-form.php"
                  class="link-danger">Login</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>

</body>
</html>