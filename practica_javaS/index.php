<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_PHP_Cifrado</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Añadido para centrar verticalmente */
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Practica_PHP_Cifrado</h1>
    <form method="post" action="contra.php" target="ventana">
        <label>Ingresa un texto:</label>
        <input type="text" class="texto" name="clave" value="<?php echo isset($_POST['clave']) ? $_POST['clave'] : ''; ?>">
        <input type="submit" class="btnText" name="accion" value="Enviar"><br><br>
        <input type="hidden" name="tipo_operacion" id="tipo_operacion" value="">
        <input type="submit" class="btnD" name="accion" onclick="document.getElementById('tipo_operacion').value='Cifrar'" value="Cifrar">
        <input type="submit" class="btnE" name="accion" onclick="document.getElementById('tipo_operacion').value='Descifrar'" value="Descifrar">
        
        <br>
        <iframe name="ventana" src="contra.php" class="ventana"></iframe>
    </form>
</body>
</html>
