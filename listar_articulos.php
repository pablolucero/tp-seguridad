<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <title>Articulos</title>

    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 90%;
            text-align: center;
            margin-left:auto; 
            margin-right:auto; 
        }

        table, th, td {
            border: 1px solid;
        }

        th {
            background: black;
            color: white;
            text-align: center;
        }
    </style>

</head>
<body>
<div class="container">

<h2>Listado de articulos</h2>

<table>

<?php

    if (!$_POST['nombre']) {
        echo "Sin resultados validos";
    }

    if ($_POST['nombre']) {

        $link = mysqli_connect("localhost", "root", "root", "tp-seguridad") or die ("Problemas en la conexion " . mysqli_error($link));

        $nombre = $_POST['nombre'];

        $query = "SELECT * FROM articulos WHERE nombre LIKE '%$nombre%' ;";
        $result = mysqli_query($link, $query);

        echo "La query ejecutada fue: <br><br>";
        echo '<pre>';
        echo $query;
        echo '</pre><br>';

        if (mysqli_num_rows($result) == 0) {
            echo "Sin resultados validos";
            echo "<br><br>";
        } else {

            echo "<tr>";
            echo "<th>Articulo</th>";
            echo "<th>Nombre</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td>" . $row["codigo"] . "</td><td>" . $row["nombre"] . "</td></tr>";
            }
        }
    }

    ?>
</table>

<br>
<button onclick="history.back()" class="btn btn-secondary">Volver</button>

</div>
</body>
</html>