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
    $contenido = file_get_contents("texto2.txt");
    echo "<p>Contenido del archivo que hemos escrito: $contenido</p>";
    fclose($archivo);
?>

<h3>Crear Directorios</h3>
<?php 
    mkdir("directorio1");
    chmod("directorio1", 0777);
?>

<h3>Mover, Eliminar y Renombrar</h3>
<?php 
    if(copy("fuente.txt", "destino.txt")) {
        echo "Archivo movido correctamente";
    } else {
        echo "No se ha podido mover el archivo";
    }
    unlink("fuente.txt");
    rename("destino.txt", "copia.txt");
?>

