<h1>Ficheros</h1>
<hr>
<h3>Abrir Y Leer: fread</h3>
<?php 
    $archivo = fopen("texto.txt", "r");
    if (!$archivo) {
        echo "<p>No se ha podido abrir el archivo</p>";
    } else {
        echo "<p>Archivo abierto correctamente</p>";
        $contenido = fread($archivo, filesize("texto.txt"));
        echo "<p>Contenido del archivo: $contenido</p>";
        fclose($archivo);
    }
?>

<h3>Abrir y Leer: file_get_contents </h3>
<?php 
    $contenido = file_get_contents("texto1.txt");
    echo "<p>Contenido del archivo: $contenido</p>";
?>

<h3>Escribir en un fichero: fwrite</h3>
<?php 
    if (is_writable("texto2.txt")) {
        $archivo = fopen("texto2.txt", "w");
        $texto = "Hola Mundo";
        fwrite($archivo, $texto);
        echo "Archivo escrito correctamente.";
    } else {
        echo "No se puede escribir en el archivo.";
    }
    fclose($archivo);
?>
