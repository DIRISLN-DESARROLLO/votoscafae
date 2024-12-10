<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constancia de Voto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .info {
            margin: 15px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img alt="Logo" src="img/logo.png" class="d-none d-sm-block" width="350px"/>
        <h2>Constancia de Voto</h2>
    </div>
    <div class="info">
        <p><strong>Usuario:</strong><br><br>{{ $user->names }} {{ $user->a_paterno }} {{ $user->a_materno }}</p>
        <p><strong>Fecha del Voto:</strong><br><br>{{ $voto->created_at->format('d/m/Y H:i:s') }}</p>
        <p><strong>Opción Votada:</strong><br><br>{{ $lista->nombre }}</p>
        <p><strong>Código de Voto:</strong><br><br>{{ $voto->hash_votacion }}</p>
    </div>
</div>
</body>
</html>
