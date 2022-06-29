<x-guest-layout>
    <div class="hidden fixed top-0 right-0 px-6 py-6 sm:block">
        <a href="{{route('login')}}" class="ml-4 text-sm text-gray-700 underline"><b>VOLVER</b></a>
    </div>   
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Olvidaste tu contreseña? Coloca tu direccion de correo electronico y le enviaremos un enlace para el restablecimiento de su contraseña') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Restablecer contraseña') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

