@extends('layouts.plantilla1')
@section('titulo','registro')
@section('contenido')

<div style="display: flex; justify-content: center; align-items: center; height: 190vh; background-image: url('https://i.pinimg.com/736x/ca/1e/93/ca1e93b51910d27c05f4cd363ec11787.jpg'); ">
    <form style="background-color: #fffaf3; padding: 30px; width: 350px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); font-family: 'Georgia', serif;">
        <h2 style="text-align: center; color: #4a3c31; margin-bottom: 20px; font-family: 'Garamond', serif;">Registro de libro</h2>
        
        <label for="isbn" style="font-weight: bold; color: #5f4d3f; margin-bottom: 5px; display: block;">ISBN</label>
        <input type="text" id="isbn" name="isbn" placeholder="ISBN del libro" 
               style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #c4b59f; border-radius: 8px; font-size: 15px; background-color: #faf8f3; color: #4a3c31;">

        <label for="Titulo" style="font-weight: bold; color: #5f4d3f; margin-bottom: 5px; display: block;">Titulo</label>
        <input type="text" id="Titulo" name="Titulo" placeholder="Titulo del libro" 
               style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #c4b59f; border-radius: 8px; font-size: 15px; background-color: #faf8f3; color: #4a3c31;">

        <label for="Autor" style="font-weight: bold; color: #5f4d3f; margin-bottom: 5px; display: block;">Autor</label>
        <input type="text" id="Autor" name="Autor" placeholder="Autor del libro" 
               style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #c4b59f; border-radius: 8px; font-size: 15px; background-color: #faf8f3; color: #4a3c31;">

        <label for="Pag" style="font-weight: bold; color: #5f4d3f; margin-bottom: 5px; display: block;">Páginas</label>
        <input type="text" id="Pag" name="Pag" placeholder="Páginas del libro" 
               style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #c4b59f; border-radius: 8px; font-size: 15px; background-color: #faf8f3; color: #4a3c31;">
        
        <label for="Año" style="font-weight: bold; color: #5f4d3f; margin-bottom: 5px; display: block;">Año</label>
        <input type="text" id="Año" name="Año" placeholder="Año del libro" 
               style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #c4b59f; border-radius: 8px; font-size: 15px; background-color: #faf8f3; color: #4a3c31;">


        <label for="Editorial" style="font-weight: bold; color: #5f4d3f; margin-bottom: 5px; display: block;">Editorial</label>
        <input type="text" id="Editorial" name="Editorial" placeholder="Editorial del libro" 
               style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #c4b59f; border-radius: 8px; font-size: 15px; background-color: #faf8f3; color: #4a3c31;">


               <label for="Correo" style="font-weight: bold; color: #5f4d3f; margin-bottom: 5px; display: block;">Email de Editorial</label>
        <input type="text" id="Correo" name="Correo" placeholder="Correo" 
               style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #c4b59f; border-radius: 8px; font-size: 15px; background-color: #faf8f3; color: #4a3c31;">
        <button type="submit" style="width: 100%; padding: 12px; background-color: #8b7e66; color: white; border: none; border-radius: 20px; font-size: 16px; cursor: pointer; font-weight: bold; transition: background-color 0.3s;">
            Registrar
        </button>
    </form>
</div>


@endsection