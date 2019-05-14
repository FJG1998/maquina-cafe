<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAFE RANDOM</title>
</head>

<body>

    <form action="php/ticket.php" method="POST">

        <span>Elija su producto:</span>

        <select name="productos" id="" required>

            <option value="Cafe solo">Cafe solo</option>
            <option value="Capuchino">Capuchino</option>
            <option value="Cafe con leche">Café con leche</option>
            <option value="Cafe americano">Café americano</option>

        </select>

        <span>Dinero introducido</span>

        <select name="dinerointroducido" id="">

            <option value="0.10">0.10€</option>
            <option value="0.20">0.20€</option>
            <option value="0.30">0.30€</option>
            <option value="0.40">0.40€</option>
            <option value="0.50">0.50€</option>
            <option value="0.60">0.60€</option>
            <option value="0.70">0.70€</option>
            <option value="0.80">0.80€</option>
            <option value="0.90">0.90€</option>
            <option value="1.00">1€</option>
            <option value="2.00">2.00€</option>
            <option value="3.00">3.00€</option>
            <option value="5.00">5.00€</option>
            <option value="10.00">10.00€</option>
            <option value="20.00">20.00€</option>

            </select>

        <input type="submit" value="Continuar">


    </form>
</body>

</html>