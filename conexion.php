<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion PHP</title>
</head>

<body>
    <?php
        $db_host="localhost:3307";
        $db_nombre="form_bd";
        $db_usuario="root";
        $db_contra="";

        $conexion = mysqli_connect($db_host,$db_usuario, $db_contra, $db_nombre);

        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la base de datos";
            exit();
        }
        $nombre =$_POST['nombre'];
        $apellido =$_POST['apellido'];
        $email =$_POST['email'];
        $nacimiento =$_POST['nacimiento'];
        $password =$_POST['password'];

        $consulta="INSERT INTO usuarios (nombre, apellido, email, fecha_nacimiento, contraseña) values ('$nombre','$apellido','$email','$nacimiento',md5('$password'))";

        mysqli_query($conexion,$consulta);
        echo "Datos insertados correctamente";
        mysqli_close($conexion);
    ?>
</body>

</html>
