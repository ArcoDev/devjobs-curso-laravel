@extends('layouts.app')

@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>
    <form class="max-w-lg mx-auto my-10" action="">
        <div class="mb-5">
            <label for="titulo" class="block text-gray-700 text-sm mb-2">Titulo Vacante: </label>
            <input id="titulo" type="text" class="p-3 bg-white rounded form-input w-full focus:outline-none mb-3 
                                                  @error('password') is-invalid @enderror"
            name="titulo">
            {{ $categorias }}
            <button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">
                Publicar vacante
            </button>
            
        </div>
    </form>
@endsection