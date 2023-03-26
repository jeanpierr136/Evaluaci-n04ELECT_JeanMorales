<?php include('../include/header.php');?>
<?php include('../conexion.php');?>
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <div class="text-black px-3 py-4 p-md-5 mx-md-4" style="background: hsla(0, 0%, 100%, 0.3); backdrop-filter: blur(30px); border-radius:50%">
          <h4 class="card-body p-5 shadow-5 text-center"><a class="" href="index.html"><i class="fas fa-user fa-10x" style="color: rgba(255,255,255,70%)"></i></a></h4>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="../Controllers/RegisterControllers.php" method="POST">


              <?php if(isset($_SESSION['message'])){ ?>

              <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php session_unset(); }?>

              <div class="form-outline mb-5"><!--start0-->
                <input type="text" id="id_usuario" name="campo_usuario" class="form-control" placeholder="Username" autofocus  />
              </div><!--END0-->

              <div class="row"><!--start1-->
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="id_nombre" name="campo_nombre" class="form-control" placeholder="first name"/>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="id_apellido" name="campo_apellido" class="form-control" placeholder="last name"/>
                  </div>
                </div>
              </div><!--END1-->

              <div class="form-outline mb-4"><!-- Email input -->
                <input type="email" id="id_email" name="campo_email" class="form-control" placeholder="email" />
              </div><!-- Email input END-->

              <div class="row"><!--start2-->
                <div class="col-md-6 mb-4">
                  <div class="form-outline mb-4"><!--telefono-->
                    <input type="text" id="id_telefono" name="campo_telefono" class="form-control" placeholder="phone" />
                  </div><!--ENDtelefono-->
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline mb-4"><!-- edad input -->
                    <input type="edad" id="id_edad" name="campo_edad" class="form-control" placeholder="age" />
                  </div><!-- edad input END-->
                </div>
              </div><!--END2-->

              <div class="form-outline mb-4"><!-- password input -->
                <input type="password" id="id_password" name="campo_password" class="form-control" placeholder="password" />
              </div><!-- password input END-->

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div><!-- Checkbox ENd -->

              <div class="text-center pt-1 mb-5 pb-1 d-grid gap-2"> <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block d-grid gap-2" name="register_form"> Sign up</button>
              </div> <!-- Submit button END-->

              <div class="d-flex align-items-center justify-content-center pb-4">
                 <p class="mb-0 me-2">Do you already have an account?</p>
                 <a href="../index.php"><button type="button" class="btn btn-outline-primary">Login now</button></a>
               </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<?php include('../include/footer.php');?>