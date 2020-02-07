<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  <?php
if (isset($_GET['succes'])&& $_GET['succes']==1){
  echo "<p style='color:green;text-align:center'>La persona se agrego correctamente</p>";
}



?>
    <h1></h1>
    <form method="GET" action="capturar.php" style=" width:50%;margin:10px auto; autodisplay:flex;align-items: center;justify-content: center;" >
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Edad</label>
    <input type="text" class="form-control"name="age" id="exampleInputPassword1" placeholder="Ingrese su edad">
  </div>
  <div class="form-check">
    
    
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<br />



<table class="table" style="max-width:75%; margin:0 auto;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
$conn=mysqli_connect( "127.0.0.1","root","","Practicas");

$consulta = "SELECT id,name,age FROM users";

if ($resultado = $conn->query($consulta)) {

    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
echo"<tr>";
echo "<td>" . $fila[0] . "</td>";
echo "<td>" . $fila[1] . "</td>";
echo "<td>" . $fila[2] . "</td>";


echo"</tr>";
        
    }

    /* liberar el conjunto de resultados */
    $resultado->close();
}?>
    
    
  </tbody>
  
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>







































