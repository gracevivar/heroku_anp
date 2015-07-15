        <?php
        error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
        $server = "us-cdbr-iron-east-02.cleardb.net";
        $username = "be505b883b85da";
        $password = "b22b5198";
        $db = substr("heroku_a6c93f827357fde", 1);
        $conn = new mysqli($server, $username, $password, $db);


        if ($conn->connect_error)
            die($conn->connect_error);
        $query = 'SELECT * FROM clasic';
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
        $num_rows = $result->num_rows;

        echo '<meta charset="UTF-8">';
        echo '<center>';
        echo'<table>';
        echo'<tr>';
        echo '<th>' . 'autor' . '</th>' . '<th>' . 'titulo' . '</th>' . '<th>' . 'tipo' .
        '</th>' . '<th>' . 'AÑO' . '</th>';
        echo'</tr>';
        for ($j = 0; $j < $num_rows; ++$j) {
            //coger la siguiente fila
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            echo'<tr>';
            echo '<td>' . $row['autor'] . '</td>';
            echo '<td>' . $row['titulo'] . '</td>';
            echo '<td>' . $row['tipo'] . '</td>';
            echo '<td>' . $row['anio'] . '</td>';
            echo '</tr>';
        }
        echo'</table>';
        echo '</center>';
//CERRAR CONEXIONES
        $result->close();
        $conn->close();
        ?>

