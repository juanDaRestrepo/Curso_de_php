<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <label>Nombre:
            <input id="name" type="text" name="name" placeholder="Ingrese su nombre">
        </label>
        <br/>
        <label>edad:
            <input id="edad" type="number" name="edad" placeholder="Ingrese su edad">
        </label>
        <br/>
        <p>sexo:</p>
        <label>
            Femenino:
            <input value="femenino" id="sexo" type="radio" name="sexo">
        </label>
        <label>
            Masculino:
            <input value="masculino" id="sexo" type="radio" name="sexo">
        </label>
        <br>
        <label>
            Editor:
            <input value="editor" id="rol" type="checkbox" name="rol[]">
        </label>
        <br>
        <label>
            moderador:
            <input value="moderador" id="rol" type="checkbox" name="rol[]">
        </label>
        <br>
        <label>
            imagen:
            <input value="imagen" id="rol" type="file" name="image">
        </label>
        <button type="submit">enviar</button>
    </form>
</body>
</html>

    