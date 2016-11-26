<?php

	$nombrelibro = $_POST['nombrelibro'];
	$editorial = $_POST['editorial'];
	$genero = $_POST['genero'];
	$numero_paginas = $_POST['numero_paginas'];
	$id = $_POST['id'];
	echo "libro actualizado";
require_once('conexion.php');
//consulta a la base de datos para edtiar un usuario 
$editar = mysqli_query($conexion, "UPDATE productos SET nombrelibro = '$nombrelibro', editorial = '$editorial',genero = '$genero', numero_paginas = '$numero_paginas' WHERE id = 'id'"); 

$consulta = mysqli_affected_rows($conexion);


//Redirigir a la pagina listar usuarios 
header("location:listarlibros.php?consulta=".$consulta);


?> 