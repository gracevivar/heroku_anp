  <?php
        error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
        $server = "us-cdbr-iron-east-02.cleardb.net";
        $username = "b67c482eab4854";
        $password = "c79d499e";
        $db = "heroku_5da25e9f877d6fc";
        $conn = new mysqli($server, $username, $password, $db);
		if ($conn->connect_error)
		    die($conn->connect_error);
		else
		   echo 'Conexion exitosa' . '<br>' . '<br>';
