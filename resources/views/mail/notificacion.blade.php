<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación sobre la votación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #4CAF50;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>¡Gracias por tu voto!</h1>
    </div>
    <div class="content">
        <p>Estimado/a <strong>{{ $user['nombres']." ".$user['a_paterno']." ".$user['a_materno']}}</strong>,</p>
        <p>Queremos informarte que tu voto ha sido registrado exitosamente. Apreciamos tu participación y compromiso con este proceso.</p>
        <p>Si tienes alguna pregunta o necesitas asistencia, no dudes en contactarnos.</p>
        <p>Detalles del proceso:</p>
        <ul>
            <li><strong>Fecha de votacion:</strong> {{ now()->format('d/m/Y H:i:s') }}</li>
            <li><strong>Hash de seguridad:</strong> {{ $hash }}</li>
        </ul>
        <p>Gracias por tu colaboración.</p>
    </div>
    <div class="footer">
        <p>Dirección de Redes Integradas de Salud Lima Norte</p>
    </div>
</div>
</body>
</html>
