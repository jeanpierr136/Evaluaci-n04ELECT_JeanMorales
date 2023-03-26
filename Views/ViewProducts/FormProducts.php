<?php include('../../conexion.php');?>
<?php include('../../include/header.php');?>
<?php include('../Navbar2.php');?>

    <div class="container p-5">

        <div class="row"> 
            <div class="col-md-4 mx-auto"> 
                
                <div class="card card-body" style="border-radius:10%"> <!-- card card-body: creación de tarjeta-->

                    <form action="../../Controllers/ProductsControllers/CreateProduct.php" method="POST">

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Create Register from Products</p>
                        </div>

                            <?php if(isset($_SESSION['message'])){ ?>

                            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php session_unset(); }?>

                        <div class="form-outline mb-5"><!--start0-->
                            <input type="text" id="id_nombre_product" name="campo_nombre_product" class="form-control" placeholder="Nombre del Producto" autofocus  />
                        </div><!--END0-->


                        <div class="form-outline mb-4"><!-- Email input -->
                            <input type="text" id="id_precio" name="campo_precio" class="form-control" placeholder="precio" />
                        </div><!-- Email input END-->

                        <div class="form-outline mb-4"><!-- password input -->
                            <input type="text" id="id_cantidad" name="campo_cantidad" class="form-control" placeholder="cantidad" />
                        </div><!-- password input END-->

                        <div class="text-center pt-1 mb-5 pb-1 d-grid gap-2"> <!-- Submit button -->
                            <button type="submit" class="btn btn-success btn-block d-grid gap-2" name="register_form_products">Create</button>
                        </div> <!-- Submit button END-->

                    </form>
                </div>

            </div>
        </div>

    </div>

<?php include('../../include/footer.php');?>