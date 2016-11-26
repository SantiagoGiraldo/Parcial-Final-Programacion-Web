<?php 

	require_once ('header.php');
	require_once('conexion.php');

	$consulta = mysqli_query($conexion, "SELECT * FROM productos");
	$productos = mysqli_fetch_all($consulta, MYSQL_ASSOC);




?>
 
 <div class="container">
 	<h2 class="text-center">Listar Libros</h2>
	<a href="crearlibro.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Añadir Nuevo Libro</a>
 	<table class="table table-bordered table-striped">
 <tr>
 <th class="text-center">id</th>
 <th class="text-center">Nombre</th>
 <th class="text-center">Editorial</th>
 <th class="text-center">Genero</th>
 <th class="text-center">Numero de Paginas</th>
 <th class="text-center">Imagen del libro</th>
 <th class="text-center">Opciones</th>
</tr>
	
<?php foreach ($productos as  $producto):?>

<tr>
	<td class="text-center"><?php echo $producto['id']; ?></td>
	<td class="text-center"><?php echo $producto['nombrelibro']; ?></td>
	<td class="text-center"><?php echo $producto['editorial']; ?></td>
	<td class="text-center"><?php echo $producto['genero']; ?></td>
	<td class="text-center"><?php echo $producto['numero_paginas']; ?></td>
	<td class="text-center"><img src="adjunto_producto/<?php echo $producto['adjunto_producto']; ?>"  class="img-responsive" width="25%"></td>
	<td class="text-center">
	
	<a href="verlibro.php?id=<?php echo $producto['id']?>" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></a>
	
	<a href="editarlibro.php?id=<?php echo $producto['id']?>" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
	
	<a href="eliminarlibro.php?id=<?php echo $producto['id']?>" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar este libro')"><i class="fa fa-trash" aria-hidden="true"></i></a>
			</td>
		</tr>

 
 		<?php endforeach;?>

 
		</table>
	</div>
	<?php
 	require_once('footer.php');
 ?>