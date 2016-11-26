<?php 
	//encabezado 
	require_once ('header.php');
	
	//validar si las variables estan inicializadas  

	if 	(isset($_POST['nombrelibro']) 
		&& isset($_POST['editorial'])
		&& isset($_POST['genero'])
		&& isset($_POST['numero_paginas'])
		&& isset($_FILES['imagen_libro'])
		&& isset($_POST['usuario_id'])
		&& isset($_POST['fecha_creacion'])
		)

		{

			$nombrelibro = $_POST['nombrelibro'];
			$editorial = $_POST['editorial'];
			$genero = $_POST['genero'];
			$numero_paginas = $_POST['numero_paginas'];
			$imagen_libro = $_FILES['imagen_libro']['name'];
			$usuario_id = $_POST['usuario_id'];
			$fecha_creacion = $_POST['fecha_creacion'];
			$carpeta = "adjunto_producto";
			$direccion = $carpeta.basename($imagen_libro);

			if(move_uploaded_file($_FILES['imagen_libro']['tmp_name'], $direccion))
			{

			require_once('conexion.php');
			$insertar = mysqli_query($conexion, "INSERT INTO productos(nombrelibro,editorial,genero,numero_paginas,imagen_libro,usuario_id) VALUES('$nombrelibro', '$editorial', '$genero', '$numero_paginas', '$imagen_libro', '$usuario_id')");

		$consulta = mysqli_affected_rows($conexion);
		
		if($consulta == 1)
		{
		
		?>

			<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Alerta</strong>El Libro fue registrado con exito.
				</div>
				<?php 
		}
		else
		{

			?>

				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Alerta</strong>El Libro no pudo ser registrado,intentelo de nuevo. 
				</div>
				
				<?php

		}	
		
	}
	else{

		  ?>
			<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Alerta</strong>La imagen del libro no pudo ser procesada,Intentelo de nuevo.
				</div>
				
				<?php

	}


}

			
	

?>
<div class="container">
	<h2 class="text-center">Crear Nuevo Libro</h2>
	<div class="row">
	<div class="class col-md-2"></div>
	<form action="crearlibro.php" class="col-md-8" method="POST" enctype= "multipart/form-data">
	  <div class="form-group">

	  	<label for="nombre">Nombre</label>
	  	<input type="text" name="nombrelibro"
	  	class="form-control" placeholder="ingrese nombre" required="">
	  	</div>
	  	<div class="form-group">

	  	<label for="nombre">Editorial</label>
	  	<input type="text" name="editorial" class="form-control" placeholder="ingrese referencia" required="">
	  	</div>
	  	<div class="form-group">

	  	<label for="nombre">Genero</label>
	  	<input type="text" name="genero" class="form-control" placeholder="ingrese genero " required="">
	
	  	<div class="form-group">

	  	<label for="nombre">Numero de Paginas</label>
	  	<input type="number" name="numero_paginas" class="form-control" placeholder="ingrese el numero de paginas" required="">
	  	</div>
	  	<div class="form-group">

	  	<label for="nombre">Fecha de Creacion</label>
	  	<input type="date" name="fecha_creacion" class="form-control" placeholder="ingrese la fecha de creacion" required="">
	  	</div>

	  	<input type="hidden" name="usuario_id" value="<?php echo $_SESSION['id'];?>">
	  	<div class="form-group">
		<label for="nombre">Imagen del libro</label>
	  	<input type="file" name="imagen_libro" class="form-control" required="">
	  	</div>
	  	<div class="text-center">
	  		<button type="submit" class="btn btn-primary">Crear Libro</button>
	  		<a href="listarlibros.php" class="btn btn-success">Volver Atras</a>
	  	</div>
</form>
		
</div>
	
	  	</div>

 <?php

 //footer
 	require_once('footer.php');
 ?>