<?php include('../../include/header.php');?>
<?php include('../../Views/Navbar2.php');?>

    <div class="container p-5">
        <div class="row"> 
            <div class="col-md-4 mx-auto"> 
                
                <div class="card card-body" style="border-radius:10%"> <!-- card card-body: creación de tarjeta-->

                    <form action="UpdateProduct.php" method="POST">

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Update Register from Procuts</p>
                        </div>

                            <?php if(isset($_SESSION['message'])){ ?>

                            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php session_unset(); }?>

                        <div class="form-outline mb-5"><!--start0-->
                            <input type="text" id="id_nombre_product" name="campo_nombre_product" class="form-control" placeholder="Nombre del Producto" value="<?php echo$nombre?>"/>
                        </div><!--END0-->


                        <div class="form-outline mb-4"><!-- Email input -->
                            <input type="text" id="id_precio" name="campo_precio" class="form-control" placeholder="Precio" value="<?php echo$precio?>"/>
                        </div><!-- Email input END-->

                        <div class="form-outline mb-4"><!-- password input -->
                            <input type="text" id="id_cantidad" name="campo_cantidad" class="form-control" placeholder="Cantidad" value="<?php echo$cantidad?>"/>
                        </div><!-- password input END-->

                        <div class="text-center pt-1 mb-5 pb-1 d-grid gap-2"> <!-- Submit button -->
                            <button type="submit" class="btn btn-success btn-block d-grid gap-2" name="register_form_products" value="<?php echo$id?>">Update</button>
                        </div> <!-- Submit button END-->
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('../../include/footer.php');?>