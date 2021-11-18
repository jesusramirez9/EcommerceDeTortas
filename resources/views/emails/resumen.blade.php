<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen pedido</title>
</head>
<body>
    <h1>Gracia por realizar una compra</h1>
    <p class="uppercase">Bienvenido a Green</p>
    <p>Hola {{ auth()->user()->name}} </p>
    <p></p>
    <p>¡Este es un mensaje de confirmacion!</p>

    
    <p>Porfavor Ingresa desde tu perfil a mis pedidos para hacer un seguimiento <br> de tu compra</p>

    <div class="mt-4 text-white font-bold text-center">
        <small class="text-green-900">© {{ date('Y') }} Coqueteos & Antojitos. Todos los derechos reservados.</small>
    </div>

</body>
</html>