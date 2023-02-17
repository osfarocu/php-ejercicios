<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" src ="">
</head>
<body>
    <div class="Formulario">
        <h1>Formulario</h1>
    <form action="procesar.php" method="POST">
        <label>Nombre
            <input type="text" name="nom">
        </label><br><br>
        <label>Apellido
            <input type="text" name="apel">
        </label><br>
        <p>Tip. Doc
        <input type="radio" name="tdoc" value="T.I">T.I
        <input type="radio" name="tdoc" value="C.C.">C.C
        </p>
        <label>No.Doc
            <input type="text" name="ndoc">
        </label>
        <br> <br> 
        <label>No. Movil
            <input type="text" name="nmovil">
        </label>
        <br> <br>


    <button type="submit">Enviar</button>
    <br>
    <br>
    </form>
    </div>
    
   
</body>
</html>