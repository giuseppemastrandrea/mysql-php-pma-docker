<?php
$mysqli = new mysqli("mysql","root","root","application_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$query = mysqli_query($mysqli, "SHOW TABLES");
$numrows = mysqli_num_rows($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MEH VABBE</h1>
    <div>
        <?php 
        echo "<b>Tabelle: ".$numrows."<br />Nomi delle tabelle:</b>";
        while ($row = mysqli_fetch_array($query)) {
            echo $row[0]." ";
        }
        
        ?>

    </div>
    
    <a href="contatti.html">Vai alla pagina dei contatti</a>
</body>
</html>