<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación de Estado de Internet</title>
    <style>
        /* Estilos básicos en línea */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .header {
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .activo{
            background-color: #4CAF50;
        }
        .inactivo{
            background-color: #bb0b0b;
        }
        .content {
            margin-top: 20px;
            line-height: 1.6;
            color: #333;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.8em;
            color: #777;
            text-align: center;
        }
        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white !important;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header {{ $item['estado'] == 0 && $item['tiempo_respuesta'] ==0 ? 'inactivo': 'activo' }}">
        <h2>Estado de Internet de: {{ $establecimiento }}</h2>
    </div>
    <div class="content">
        <p>
            Mensaje de la situación actual del servicio de internet:
        </p>
        <p>
            <strong>Tiempo de respuesta:</strong> {{ $informacion }}
        </p>
        <a href="https://wa.me/+51989698267" target="_blank" class="btn">Ver más detalles</a>
    </div>
    <div class="footer">
        <p>Este es un mensaje automático, por favor no responder.</p>
        <p>&copy; {{ date('Y') }} Diris LN. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
