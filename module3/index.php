<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Formularios</h1>
    <form action="submit.php" method="POST">
        <div class="m-2">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div class="m-2">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos">
        </div>
        <div class="m-2">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="m-2">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="m-2">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad">
        </div>
        <div class="m-4">
            <label for="boton">Botón:</label>
            <input type="submit" name="boton" id="boton" value="Enviar">
        </div>      
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>