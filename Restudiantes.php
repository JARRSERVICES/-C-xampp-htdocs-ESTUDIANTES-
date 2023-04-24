
  <?php
  include_once('db.php');
  $nombre=$_POST['nombre'];
  $matricula=$_POST['matricula'];
  

  echo "$nombre,$matricula";
     
  


  $conectar=conn(); //ejecuta las conexiones a la b.d.

  $sql="INSERT INTO estudiantes (nombre, matricula)
  
  VALUES ('$nombre', '$matricula')";
  
  $resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);
  
  echo "Registro exitoso";
    

  ?>
