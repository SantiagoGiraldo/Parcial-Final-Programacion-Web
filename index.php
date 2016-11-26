<?php 
require_once('header.php');
require_once('conexion.php');

	$consulta = mysqli_query($conexion, "SELECT * FROM productos");
	$productos = mysqli_fetch_all($consulta, MYSQL_ASSOC);

?>
	
<div class="row">
<?php
foreach ($productos as  $producto):
?>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	<div class="thumbnail text-center">
		<img src="adjunto_producto/<?php echo $producto['adjunto_producto']; ?>" alt="">
		<div class="caption">
			<h3><?php echo $producto ['nombrelibro'] ?>;</h3>
			<p>
				<a href="#" class="btn btn-primary"><?php echo $producto ['genero'] ?></a>
				<a href="#" class="btn btn-default">Comprar</a>
			</p>
		</div>
	</div>
</div>
<?php endforeach; ?>
</div>
	
</div>

	
<?php
require_once('footer.php');
 ?>
