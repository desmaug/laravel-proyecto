<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Agrega los enlaces de Bootstrap aquí -->
    <!-- ... -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MI SISTEMA</a>
            
            <div class="" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    
                    <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="">
                        </a>
                    </div>

                    <!-- Navigation Links -->

                    <!-- Settings Dropdown -->
                    <!-- Botón de nombre de usuario -->
                    <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" type="button" href="{{ route('profile.show') }}">Mi Perfil</a></li>
                            <li><button class="dropdown-item" type="button" action="{{ route('profile.show') }}">Configuracion</button></li>
                            
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <button class="dropdown-item" href="{{ route('logout') }}"
                                                @click.prevent="$root.submit();">
                                        Salir
                                    </button>
                                </form>
                        </ul>
                    </div>
                </nav>
                   
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    @yield('content')

    <!-- Agrega los scripts de Bootstrap aquí -->
    <!-- ... -->

</body>
</html>


