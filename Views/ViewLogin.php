
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center d-grid gap-2">
                  <h4 class="mt-3 mb-5 pb-1">Login</h4>
                </div>

                  <?php if(isset($_SESSION['message'])){ ?>

                  <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <?php session_unset(); }?>

                <form action="Controllers/LoginControllers.php" method="POST">
                  
                  <p class="text-center">Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="text" id="id_users" name="campo_users"  class="form-control" placeholder="Username or Email address" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="id_password" name="campo_password" class="form-control" placeholder="Password"/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1 d-grid gap-2">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 " type="submit" name="login_form" value="login_form">Login</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="Views/ViewRegisterUsers.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>
                </form>

              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">

            <div class="text-black px-3 py-4 p-md-5 mx-md-4" style="background: hsla(0, 0%, 100%, 0.3); backdrop-filter: blur(30px); border-radius:20%">

                <h4 class="card-body p-5 shadow-5 text-center"><a class="" href="../index.php"><i class="fas fa-user fa-10x" style="color: rgba(0,0,0,70%)"></i></a></h4>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>