@extends('layouts.plantilla1')

@section('titulo','Editar Cliente')

@section('contenido')

            {{-- inicia Tarjeta con formulario --}}

            <div class="container mt-5 col-md-6">

                @if (session('exito'))
                  <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
                @endif
                
               <!--  @session('exito')
                  <x-Alert tipo="danger"> {{ $value }} </x-Alert>
                @endsession

                @session('exito')
                    <script>
                        Swal.fire({
                            title: "Good job!",
                            text: '{{ $value }}',
                             icon: "success"
});
                    </script>
                @endsession -->

                <div class="card font-monospace">

                <div class"card-header fs-5 text-center text-primary">
                    {{__('Editar Cliente')}}
                </div>
                <div class="card-body text-justify">

                    <form action ="{{route('clientes.update', $cliente->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label"> {{__('Nombre:')}} </label>
                            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre', $ciente->nombre) }}">
                            <small class="fst-italic text-danger">{{ $errors->first('txtnombre') }}</small>
            </div>
            <div class="mb-3">
                <label for"Apellido" class="form-label"> {{__('Apellido:')}} </label>
                <input type"text" class="form-control" name="txtapellido" value="{{ old('txtapellido', $ciente->apellido) }}">
                <small class="fst-italic text-danger">{{ $errors->first('txtapellido') }}</small>
            </div>
            <div class="mb-3">
                <label for"correo" class="form-label">{{__('Correo:')}} </label>
                <input type"text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo', $ciente->correo) }}">
                <small class="fst-italic text-danger">{{ $errors->first('txtcorreo') }}</small>    
            </div>         
            <div class="mb-3">
                <label for"telefono" class="form-label"> {{__('Telefono:')}} </label>
                <input type"text" class="form-control" name="txttelefono"  value="{{ old('txttelefono', $ciente->nombre) }}">  
                <small class="fst-italic text-danger">{{ $errors->first('txttelefono') }}</small>  
<!--                 posiblemente falte la variable de  cliente -->  
            </div> 
    </div>        

    <div class="card-footer text-muted">

        <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm"> {{__('Guardar cambios de editar')}} </button>
        </div>
    </form>

    </div>
    </div>
    </div> {{-- divcontainer --}}
    {{-- finaliza Tarjeta con formulario --}}

@endsection