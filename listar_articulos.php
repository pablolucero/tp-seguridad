<html>
<head>
    <title></title>

    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 30%;
            text-align: center;
        }

        table, th, td {
            border: 1px solid;
        }

        th {
            background: black;
            color: white;
        }
    </style>

</head>
<body>

<table>

<?php

    if (!$_POST['nombre']) {
        echo "Sin resultados validos";
    }

    if ($_POST['nombre']) {

        $link = mysqli_connect("localhost", "root", "root", "parcial-ti") or die ("Problemas en la conexion " . mysqli_error($link));

        $nombre = $_POST['nombre'];

        $query = "SELECT * FROM articulos WHERE nombre LIKE '%$nombre%' ;";
        $result = mysqli_query($link, $query);

        echo "La query ejecutada fue: <br>";
        echo '<pre>';
        echo $query;
        echo '</pre>';

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
<button onclick="history.back()">Volver</button>

</body>
</html>