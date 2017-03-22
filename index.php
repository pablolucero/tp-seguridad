<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <title>Menu</title>
</head>
<body>
<div class="container">
    
    <form method="post" action="listar_articulos.php">
        <div class="form-group col-lg-8">
            <h2>Buscar articulos</h2>
            <label for="nombre">Nombre:</label>
            <div class="input-group">
            	<input type="text" name="nombre" id="nombre" class="form-control">
	            <span class="input-group-btn">
	            	<input type="submit" value="Buscar" name="listarArticulos" class="btn btn-primary">
	            </span>
        	</div>
        </div>
    </form>
    
</div>
</body>
</html>