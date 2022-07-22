<?php

include("dp.php");
session_start();

if(isset($_SESSION['uid'])){
  header("location:index.php");
}else{



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Log In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
  <body style="background-image: url(assets/img/check.png); background-repeat: no-repeat; height: 200%;>
  <section class="vh-100 gradient-custom" >
<div class="container py-5 h-100" style="float: right;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
              <?php
              
              if(isset($_GET['msg'])){

                if($_GET['msg']=='success'){
                  ?>

                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <strong>Account Registered Successfully</strong> 
              </div>
                  <?php
                }


                if($_GET['msg']== 'wrong_email'){

                  ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <strong>Email Not Registered</strong> 
              </div>

              <?php
                
              }

              if($_GET['msg']== 'wrong_pass'){

                ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Password Wrong</strong> 
            </div>

            <?php
              }

            }
              
                  ?>
            
              
              
  
              <form action="login.php" method="post">
              <div class="form-outline form-white mb-4">
                <input type="email"  name="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="pass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <input class="btn btn-outline-light btn-lg px-5" type="submit" name="login" value="Login">
              </form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

if(isset($_POST['login'])){

  $email =$_POST['email'];
  $pass =$_POST['pass'];
  
  $fetch_data = $con->query("SELECT * FROM `users` WHERE `email`='$email'");
  
  $count_data = mysqli_num_rows($fetch_data);
  
  $user_data = mysqli_fetch_array($fetch_data);
  
  if($count_data > 0){
  
     if($pass == $user_data['password']){
  
     
      $_SESSION['uid'] = $user_data['id'];
      $_SESSION['uname'] = $user_data['uname'];
      $_SESSION['uemail'] = $user_data['uemail'];
      header("location:index.php");
  
     }else{
      header("location:login.php?msg=wrong_pass");
     }
  
  
  }else{
  
    header("location:login.php?msg=wrong_email");
  
  }
  
  }
  }
  
  ?>

