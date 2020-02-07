<?php
$name=$_GET["name"];
$age=$_GET['age'];
if (strlen($name)>0 && $age>0){
   $conn=mysqli_connect("127.0.0.1","root","","Practicas");
   

   $sql = "INSERT INTO users (name, age) VALUES ('".$name ."','".$age ."')";
   if (mysqli_query($conn, $sql)) {
        // echo "La persona se agrego a la tabla de datos ";
        header("Location: index.php?succes=1");
   } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $ultimo_id=mysql_insert_id($conn);
   echo "$ultimo_id <br>";
  
} 

?>