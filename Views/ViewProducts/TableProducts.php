<?php if(isset($_SESSION['message'])){ ?>

<div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
<?= $_SESSION['message'] ?>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php session_unset(); }?>

<table class="table table-striped table-hover table-bordered border-dark aling-middle w-auto">

<thead class="table-dark">
  <tr class="align-middle text-center">
    <th>ID</th>
    <th>Nombre_Producto</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Actions</th>
  </tr>
</thead>

<tbody>

  <?php

    $query = "SELECT * FROM productos";
    $result_task = mysqli_query($conexion_DB,$query);

    foreach ($result_task as $resul_task2) { ?>
      
      <tr class="align-middle">
        <td><?php  echo $resul_task2['id']?></td>
        <td><?php  echo $resul_task2['nombre_product']?></td>
        <td><?php  echo $resul_task2['precio']?></td>
        <td><?php  echo $resul_task2['cantidad']?></td>

        <td class="text-center">
          <a class="btn btn-success" href="FormProducts.php"><i class="fas fa-plus-circle"></i></a>
          <a class="btn btn-warning" href="../../Controllers/ProductsControllers/UpdateProduct.php?id=<?php echo$resul_task2['id']?>"><i class="fas fa-marker"></i></a>
          <a class="btn btn-danger mt-1" href="../../Controllers/ProductsControllers/DeleteProduct.php?id=<?php echo$resul_task2['id']?>"><i class="far fa-trash-alt" ></i></a>
        </td>
      </tr>
  <?php } ?>
</tbody>
</table>