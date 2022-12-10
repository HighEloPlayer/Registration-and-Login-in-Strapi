<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
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

     .flex-center{
    display: flex;
    align-items: center; 
    justify-content: center;
  }
  </style>
 
</head>

<body>

 <div class="flex-center">
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
        </div>

        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mb-0"><h1>Login</h1></p>
            </div>

            <form action="login.php" method="POST">
            <!--Email Input--> 
            <div class="form-outline mb-4">
              <input type="email" id="identifier" name="identifier" class="form-control form-control-lg"
                placeholder="Enter a valid email address"/>
            </div>
  
            <!--Password Input-->            
            <div class="form-outline mb-3">
              <input type="password" id="password" name="password" class="form-control form-control-lg"
                placeholder="Enter your password" />
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox"/>
                <label class="form-check-label">Remember me</label>
              </div>
              <a href="#" class="text-body">Forgot password?</a>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="registration-form.php"
                  class="link-danger">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
</div>

</body>
</html>