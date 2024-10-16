@extends('layouts.plantilla')

@section('titulo','repaso1')

@section('contenido')



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso 1 - Convertidor</title>
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
            flex-direction: column;
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
            font-size: 2em;
            margin: 0 0 20px;
        }

        p {
            font-size: 1.2em;
            margin: 0 0 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="number"],
        select {
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            border: none;
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #6a0dad;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #5a009d;
        }

        .resultado {
            margin-top: 20px;
            font-size: 1.2em;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Convertidor de MB, GB y TB</h1>
    
    <form action="{{ route('convertir') }}" method="POST">
        @csrf
        <label for="cantidad">Ingrese la cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <label for="conversion">Seleccione la conversión:</label>
        <select id="conversion" name="conversion">
            <option value="mb-gb">MB a GB</option>
            <option value="gb-mb">GB a MB</option>
            <option value="gb-tb">GB a TB</option>
            <option value="tb-gb">TB a GB</option>
        </select>

        <button type="submit">Convertir</button>
    </form>

    @if (isset($resultado))
        <div class="resultado">
            <p>{{ $resultado }}</p>
        </div>
    @endif
</div>

</body>
</html>

<div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1"></h1>
        
    </div>
@endsection