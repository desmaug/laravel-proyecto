<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-6">
                                    <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('Correo') }}</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                <div class="mb-6">
                                    <label for="password" class="col-md-6 col-form-label text-md-right">Contraseña</label>
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                </div>
                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-checkbox id="remember_me" name="remember" />
                                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            Olvidó su contraseña
                                        </a>
                                    @endif
                                    <button style="margin: 5px;" type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
