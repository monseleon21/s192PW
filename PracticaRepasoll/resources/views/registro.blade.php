@extends('layouts.plantilla1')
@section('titulo','registro')
@section('contenido')




<div>
    @if (session('exito'))
        <script>
            alertify.success("Todo correcto: Libro '{{ session('exito') }}' guardado");
        </script>
    @endif

    <div style="display: flex; justify-content: center; align-items: center; height: 190vh; background-image: url('https://i.pinimg.com/736x/ca/1e/93/ca1e93b51910d27c05f4cd363ec11787.jpg'); ">
        <form style="background-color: #fffaf3; padding: 30px; width: 350px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); font-family: 'Georgia', serif;" action="{{ route('rutaEnviar') }}" method="POST">
            @csrf
            <h2 style="text-align: center; color: #4a3c31; margin-bottom: 20px; font-family: 'Garamond', serif;">Registro de libro</h2>

            <label for="isbn" style="font-weight: bold; color: #5f4d3f;">ISBN</label>
            <input type="number" name="txtisbn" value= "{{ old('txtisbn') }}" placeholder="ISBN del libro" min="1" style="width: 100%; padding: 12px; margin-bottom: 15px;" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtisbn')}}</small>

            <label for="Titulo" style="font-weight: bold; color: #5f4d3f;">Titulo</label>
            <input type="text" name="txtTitulo" value= "{{ old('txtTitulo') }}" placeholder="Titulo del libro" min="1" style="width: 100%; padding: 12px; margin-bottom: 15px;" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtTitulo')}}</small>

            <label for="Autor" style="font-weight: bold; color: #5f4d3f;">Autor</label>
            <input type="text" name="txtAutor" value= "{{ old('txtAutor') }}" placeholder="Autor del libro" style="width: 100%; padding: 12px; margin-bottom: 15px;" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtAutor')}}</small>

            <label for="Pag" style="font-weight: bold; color: #5f4d3f;">Páginas</label>
            <input type="number" name="txtPag" value= "{{ old('txtpag') }}" placeholder="Páginas del libro" min="1" style="width: 100%; padding: 12px; margin-bottom: 15px;" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtPag')}}</small>

            <label for="Año" style="font-weight: bold; color: #5f4d3f;">Año</label>
            <input type="number" name="txtAño" value= "{{ old('txtAño') }}" placeholder="Año del libro" min="1000" max="{{ date('Y') }}" style="width: 100%; padding: 12px; margin-bottom: 15px;" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtAño')}}</small>

            <label for="Editorial" style="font-weight: bold; color: #5f4d3f;">Editorial</label>
            <input type="text" name="txtEditorial" value= "{{ old('txtEditorial') }}" placeholder="Editorial del libro" style="width: 100%; padding: 12px; margin-bottom: 15px;" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtEditorial')}}</small>

            <label for="Correo" style="font-weight: bold; color: #5f4d3f;">Email de Editorial</label>
            <input type="email" name="txtCorreo" value= "{{ old('txtCorreo') }}" placeholder="Correo" style="width: 100%; padding: 12px; margin-bottom: 20px;" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtCorreo')}}</small>

            <button type="submit" style="width: 100%; padding: 12px; background-color: #8b7e66; color: white; border: none; border-radius: 20px; font-size: 16px; cursor: pointer; font-weight: bold; transition: background-color 0.3s;">
                Registrar
            </button>
        </form>
    </div>
</div>
@endsection
