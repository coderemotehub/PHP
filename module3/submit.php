<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $edad = $_POST["edad"];

    echo "Nombre: $nombre <br>";
    echo "Apellidos: $apellidos <br>";
    echo "Email: $email <br>";
    echo "Contraseña: $hashedPassword <br>";
    echo "Edad: $edad <br>";

    $file = "data.txt";
    $file = fopen($file, "a");
    if($file == false){
        echo "Error al abrir el archivo";
        exit();
    } else {
        fwrite($file, "Nombre: $nombre \n");
        fwrite($file, "Apellidos: $apellidos \n");
        fwrite($file, "Email: $email \n");
        fwrite($file, "Contraseña: $hashedPassword \n");
        fwrite($file, "Edad: $edad \n");
        fwrite($file, "------------------------------------ \n");
        fclose($file);
    }
}


?>