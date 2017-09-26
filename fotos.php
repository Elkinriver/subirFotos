<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body>
     
   <center>
            <table border="1">
                <thead>
                    <tr>
						<th>Id</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    include ("conexion.php");

                   	$query= "SELECT * FROM foto";
                    $resultado= $conexion->query($query);
                    while($row =$resultado-> fetch_assoc()){                     
                  
                        
        			?>
                    <tr>
						<td> <?php echo $row ['codigo']; ?></td>
                        <td> <?php echo $row ['nombre']; ?></td>
						<td> <?php echo '<img height="70" src="'.$row["foto"].'"><br>'; ?></td>
                        
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>

        </center>
</html>
