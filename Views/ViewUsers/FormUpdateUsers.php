<?php include('../../include/header.php');?>
<?php include('../../Views/Navbar2.php');?>

    <div class="container p-5">

        <div class="row"> 
            <div class="col-md-4 mx-auto"> 
                
                <div class="card card-body" style="border-radius:10%"> <!-- card card-body: creación de tarjeta-->

                    <form action="UpdateUsers.php" method="POST">

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Update User</p>
                        </div>

                            <?php if(isset($_SESSION['message'])){ ?>

                            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php session_unset(); }?>

                        <div class="form-outline mb-5"><!--start0-->
                            <input type="text" id="id_usuario" name="campo_usuario" class="form-control" placeholder="Username" value="<?php echo$usuario?>"/>
                        </div><!--END0-->

                        <div class="row"><!--start1-->
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <input type="text" id="id_nombre" name="campo_nombre" class="form-control" placeholder="first name" value="<?php echo$nombre?>"/>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <input type="text" id="id_apellido" name="campo_apellido" class="form-control" placeholder="last name"  value="<?php echo$apellido?>"/>
                            </div>
                        </div>
                        </div><!--END1-->

                        <div class="form-outline mb-4"><!-- Email input -->
                            <input type="email" id="id_email" name="campo_email" class="form-control" placeholder="email" value="<?php echo$email?>"/>
                        </div><!-- Email input END-->

                        <div class="row"><!--start2-->
                        <div class="col-md-6 mb-4">
                            <div class="form-outline mb-4"><!--telefono-->
                            <input type="text" id="id_telefono" name="campo_telefono" class="form-control" placeholder="phone" value="<?php echo$telefono?>"/>
                            </div><!--ENDtelefono-->
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline mb-4"><!-- edad input -->
                            <input type="edad" id="id_edad" name="campo_edad" class="form-control" placeholder="age" value="<?php echo$edad?>"/>
                            </div><!-- edad input END-->
                        </div>
                        </div><!--END2-->

                        <div class="form-outline mb-4"><!-- password input -->
                            <input type="password" id="id_password" name="campo_password" class="form-control" placeholder="password" value="<?php echo$password?>"/>
                        </div><!-- password input END-->

                        <div class="text-center pt-1 mb-5 pb-1 d-grid gap-2"> <!-- Submit button -->
                            <button type="submit" class="btn btn-success btn-block d-grid gap-2" name="register_form" value="<?php echo$id?>">Update</button>
                        </div> <!-- Submit button END-->

                    </form>
                </div>

            </div>
        </div>

    </div>

<?php include('../../include/footer.php');?>