@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-screen-md">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-1/2 order-2 md:order-1">
            <div class="flex flex-col break-words bg-white border-2 shadow-md mt-20">
                <div class="bg-gray-300 text-gray-800 uppercase text-center py-3 px-6 mb-0">
                    {{ __('Register') }}
                </div>
                <form class="py-10 px-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex flex-wrap mb-6">
                        <label for="name" class="block text-gray-700 text-sm mb-2">{{ __('Name') }}</label>

                        <input id="name" type="text"
                            class="p-3 bg-gray-200 rounded form-input w-full focus:outline-none @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="email" class="block text-gray-700 text-sm mb-2">{{ __('E-Mail Address') }}</label>


                        <input id="email" type="email"
                            class="p-3 bg-gray-200 rounded form-input w-full focus:outline-none @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="password" class="block text-gray-700 text-sm mb-2">{{ __('Password') }}</label>


                        <input id="password" type="password"
                            class="p-3 bg-gray-200 rounded form-input w-full focus:outline-none @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="password-confirm"
                            class="block text-gray-700 text-sm mb-2">{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password"
                            class="p-3 bg-gray-200 rounded form-input w-full focus:outline-none"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit" class="bg-teal-300 hover:bg-teal-700 shadow-md
                            text-gray-800 hover:text-white text-lg uppercase
                             mb-2 w-full py-3 rounded
                             focus:outline-none">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="md:w-1/2 order-1 md:order-2 text-center flex flex-col justify-center px-10 mt-10">
            <h1 class="text-teal-500 text-3xl cursive">¿Eres reclutador?</h1>
            <p class="text-xl mt-5 leading-7">Crea una cuenta totalmente gratis y comienza a publicar hasta 10 vacantes
            </p>
        </div>
    </div>
</div>
@endsection
