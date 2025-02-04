<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>aeromexico</title>
</head>
<body>
    <form class="formulario" action="guardar.php" method="POST">
       <h1>Venta de Boletos</h1>

       <label for="cliente">Cliente</label>
       <input type="text" id="cliente" name="cliente" maxlength="50" required>

       <label for="boleto">Boleto</label>
       <input type="text" id="boleto" name="boleto" maxlength="50" required>

       <label for="destino">Destino</label>
       <input type="text" id="Destino" name="Destino" maxlength="50" required>

       <button type="submit" >Comprar boleto</button>
    </form>
</body>
</html>