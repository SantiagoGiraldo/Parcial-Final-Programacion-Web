<nav class="navbar navbar-default navbar-inverse" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
		<?php 
		session_start(); 
		if(!empty($_SESSION['email']))
			{
			
			?>
			<li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Index</a></li>
		<li><a href="listar_usuarios.php"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>
		<li><a href="listarlibros.php"><i class="fa fa-tag" aria-hidden="true"></i>Libros</a></li>

		<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user" aria-hidden="true"></i>
		 <?php echo "Usuario" .$_SESSION['Nombre']."" .$_SESSION['apellido']; ?>
		<b class="caret"></b></a>
					 
		 <ul class="dropdown-menu">
		<li><a href="#">Perfil</a></li>
		<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>


			<?php

			}
			else
			{
				?>
				<li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Index</a></li>
				<li><a href="registrarse.php"><i class="fa fa-folder-o" aria-hidden="true"></i>Registrarse</a></li>
				<li><a href="iniciar_sesion.php"><i class="fa fa-edit" aria-hidden="true"></i>Iniciar Sesion</a></li>
				<?php

			}
		
		?>
		
						
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>