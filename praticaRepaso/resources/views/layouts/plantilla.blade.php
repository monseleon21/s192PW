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
            margin: 0;
            padding: 0;
        }

       
        nav {
            width: 100%;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px 0;
            position: fixed;
            top: 0;
            left: 0;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 1.2em;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            margin-top: 100px; 
            text-align: center;
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


<nav>
    <ul>
        <li><a href="{{route('rutainicio')}}">inicio</a></li>
        <li><a href="{{route('rutarepaso')}}">repaso 1</a></li>
        
    </ul>
</nav>

        @yield('contenido')
</body>
</html>