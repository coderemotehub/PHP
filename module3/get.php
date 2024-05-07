<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            echo "RESQUEST METHOD: GET <br><br>";
            $fileName = "data.txt";
            $file = fopen($fileName, "r");
            if($file == false){
                echo "Error al abrir el archivo";
                exit();
            } else {
                echo "<div class='card'>";
                while(!feof($file)){
                    $line = fgets($file);
                    echo "<div>$line<div>";
                }
                echo "</div>";
                fclose($file);
            }
        }
    ?>
    
</body>
</html>