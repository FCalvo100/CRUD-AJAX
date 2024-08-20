<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>ESTUDIANTES</title>
</head>
<body>
    <h1>LISTA DE ESTUDIANTES</h1>
<p></p>
	<div id="frm">
		<input type="hidden" id="id" />
		<input id="txtNombre" placeholder="Nombre" />
		<input id="txtApellido" placeholder="Apellido" />
		<button type="button" class="btn btn-primary"  id="btn" value="ingresar">Ingresar</button>
	</div>
	<p></p>
	
    <table border="1">
		<thead><!-- Encabezado -->
			<tr>
				<th>Id</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody id="cuerpo"><!-- Cuerpo -->
		</tbody>
	</table>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>