<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

    <title>Repaso 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a0dad, #000428);
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
        }

        h1 {
            font-size: 3em;
            margin: 0 0 20px;
        }

        p {
            font-size: 1.2em;
            margin: 0 0 30px;
        }

        .btn-repaso {
            padding: 15px 30px;
            font-size: 1.2em;
            color: white;
            background-color: #6a0dad;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-repaso:hover {
            background-color: #5a009d;
        }
    </style>
</head>
<body>

<div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">esta es la vista del repaso1</h1>
        
    </div>
</body>
</html>
