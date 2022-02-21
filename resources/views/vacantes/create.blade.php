@extends('layouts.app')

@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>
    <form class="max-w-lg mx-auto my-10" action="">
        <div class="mb-5">
            <label for="titulo" class="block text-gray-700 text-sm mb-2">Titulo Vacante: </label>
            <input id="titulo" type="text" class="p-3 bg-white rounded form-input w-full focus:outline-none 
                                                  @error('password') is-invalid @enderror"
            name="titulo">    
        </div>
        <div class="mb-5">
            <label for="categoria" class="block text-gray-700 text-sm mb-2">Categoria: </label>
            <select class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:border-gray-500 p-3 bg-white" id="categoria" name="categoria">
                <option disabled selected>Selecciona tu categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">
            Publicar vacante
        </button>
    </form>
@endsection