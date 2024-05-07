<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
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
                while(!feof($file)){
                    $line = fgets($file);
                    echo $line . "<br>";
                }
                fclose($file);
            }
        }
    ?>
    
</body>
</html>