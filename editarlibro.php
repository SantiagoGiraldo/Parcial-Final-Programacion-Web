<?php 
	//encabezado 
	require_once ('header.php');
	$id = $_GET['id'];
	require_once('conexion.php');
	
	$consulta = mysqli_query($conexion, "SELECT * FROM productos WHERE id = $id");
	$producto  = mysqli_fetch_array($consulta);if(mysqli_num_rows($consulta)):
	
?>
<div class="container">
		<h2 class="text-center">Editar Libro<?php echo $producto['nombrelibro'];?></h2>
		<div class="row">
		<div class="class col-md-2"></div>
		<form action="editar_libro_post.php" method="POST"  class="col-md-8">
		
		<input type="hidden" name="id" value="<?php echo $producto ['id']; ?>">
		<div class="form-group">
		<label for="nombre">Nombre</label>
	  	<input type="text" name="nombrelibro"
	  	class="form-control" placeholder="ingrese nombre del libro" required="" value="<?php echo $producto['nombrelibro']; ?>">
	  	</div>
	  	
	  	<div class="form-group">
	  	<label for="nombre">Editorial</label>
	  	<input type="text" name="editorial" class="form-control" placeholder="" required="" value="<?php echo $producto['editorial']; ?>">
	  	</div>

	  	<div class="form-group">
		<label for="nombre">Genero</label>
	  	<input type="text" name="genero" class="form-control" placeholder="ingrese genero del libro" required="" value="<?php echo $producto['genero'];?>">
	  	</div>

	  
	  	<div class="form-group">
		<label for="nombre">Numero de Paginas</label>
	  	<input type="number" name="numero_paginas" class="form-control" placeholder="Ver el numero de paginas" required="" value="<?php echo $producto['numero_paginas'];?>">
	  	
	  
	 	</div>
	  	<div class="text-center">
		<button type="submit" class="btn btn-primary">Editar Libro</button>
	  	<a href="listarlibros.php" class="btn btn-success">Volver Atras</a>
	  	</div>
	  </form>
	</div>
</div>


<?php 
endif;
 
 //footer
 	require_once('footer.php');
 ?>