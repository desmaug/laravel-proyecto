<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Registro') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-6">
                                <label for="name" class="col-md-6 col-form-label text-md-right">Nombre</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>

                            <div class="mb-6">

                                <label for="surname" class="col-md-6 col-form-label text-md-right">Apellido</label>
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                            </div>

                            <div class="mb-6">
                                <label for="nick" class="col-md-6 col-form-label text-md-right">Nick</label>
                                <input id="nick" type="text" class="form-control" name="nick" value="{{ old('nick') }}" required autocomplete="nick" autofocus>
                            </div>

                            <div class="mb-6">
                                <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('Correo') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>

                            <div class="mb-6">
                                <label for="password" class="col-md-6 col-form-label text-md-right">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>

                            <div class="mb-6">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="password_confirmation">
                            </div>

                            <div class="nav-item">
                                <div class=" ">
                                    <button style="margin-top: 10px;" type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

        
    </x-authentication-card>
</x-guest-layout>
