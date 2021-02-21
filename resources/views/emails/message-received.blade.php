<!DOCTYPE html>
<html>
    <head>
        <title>Mensaje recibido</title>
    </head>
    <body>
        Contenido del mail
        <p> Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
        <p><strong>Asunto: </strong> {{ $msg['subject'] }}</p>
        <p><strong>Contenigo: </strong> {{ $msg['contect'] }}</p>
    </body>
</html>