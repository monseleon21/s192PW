@extends('layouts.plantilla')

@section('titulo','repaso1')

@section('contenido')


<div class="container">
    <h1>Convertidor de MB, GB y TB</h1>
    
    <form action="{{ route('convertir') }}" method="POST">
        @csrf
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <label for="conversion">Tipo de conversión:</label>
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