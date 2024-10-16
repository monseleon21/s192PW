<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

    <title>inicio</title>
    
    <style>
        body, html {
            height: 100%;
            background: linear-gradient(135deg, #6a0dad, #000428);
        }
        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">María Monserrat Campuzano León </h1>
        <p>Presiona el botón para repaso 1...</p>
        <a href="{{route ('rutarepaso') }}" class="btn btn-primary">Repaso 1</a>
     
    </div>
</body>
</html>