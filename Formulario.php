<!DOCTYPE html >
<?php
class Cconexion{
function ConexionBD(){
    $host="localhost";
    $dbname="formulariophp";
    $user="root";
    $pass="Danilo78"; 

    try{
        $conn = new PDO ("mysql:host=$host;dbname=$dbname",$user,$pass);
        echo "SE CONECTO CORRECTAMENTE LA BASE DE DATOS";
    }catch(PDOException $exp){
        echo "NO SE CONECTO CORRECTAMENTE LA BASE DE DATOS: $dbname,ERROR:$exp";
    }
    return $conn;
    }
}
?>
<body>
    <label  for="num1"> inserta el nombre <type="text" name="nombre"></p1><br>;
    <input type="varchar" id="num1" name="nombre"   />
    <br> <br>
    <label  for="num1"> inserta el email <type="text" name="email"></p1><br>;
    <input type="varchar" id="num1" name="email" />
    <br> <br>
    <label  for="num1"> inserta el numero <type="text" name="Telefono"></p1><br>;
    <input type="varchar" id="num1" name="Telefono" />

    <p><input type="submit" value="Enviar"></p>
    

</ html >