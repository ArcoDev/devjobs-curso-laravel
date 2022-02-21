@extends('layouts.app')

@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>
    <form class="max-w-lg mx-auto my-10" action="" novalidate>
        <div class="mb-5">
            <label for="titulo" class="block text-gray-700 text-sm mb-2">Titulo Vacante: </label>
            <input id="titulo" type="text" class="p-3 bg-white rounded form-input w-full focus:outline-none 
                                                  @error('password') is-invalid @enderror"
            name="titulo">    
        </div>

        <div class="mb-5">
            <label for="categoria" class="block text-gray-700 text-sm mb-2">Categoria: </label>
            <select class="block  w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:border-gray-500 p-3 bg-white" id="categoria" name="categoria">
                <option disabled selected>Selecciona</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="experiencia" class="block text-gray-700 text-sm mb-2">Experiencia: </label>
            <select class="block w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:border-gray-500 p-3 bg-white" id="experiencia" name="experiencia">
                <option disabled selected>Selecciona</option>
                @foreach ($experiencias as $experiencia)
                    <option value="{{ $experiencia->id }}">
                        {{ $experiencia->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="ubicacion" class="block text-gray-700 text-sm mb-2">Ubicacion: </label>
            <select class="block w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:border-gray-500 p-3 bg-white" id="ubicacion" name="ubicacion">
                <option disabled selected>Selecciona</option>
                @foreach ($ubicacions as $ubicacion)
                    <option value="{{ $ubicacion->id }}">
                        {{ $ubicacion->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="salario" class="block text-gray-700 text-sm mb-2">Salario: </label>
            <select class="block w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:border-gray-500 p-3 bg-white" id="salario" name="salario">
                <option disabled selected>Selecciona</option>
                @foreach ($salarios as $salario)
                    <option value="{{ $salario->id }}">
                        {{ $salario->nombre }}
                    </option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">
            Publicar vacante
        </button>
    </form>
@endsection