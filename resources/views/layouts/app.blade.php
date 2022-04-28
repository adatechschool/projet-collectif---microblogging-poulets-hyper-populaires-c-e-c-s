<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('css/site.css')}}" rel="stylesheet">
    <!-- Le titre de la page -->
    <title>Poulets hyper populaires</title>


</head>

<body>
<div id="main">
    <header>
        <div id="titre_principal">
            <div id="logo">
                <img src="" />
                <h1>Poulets hyper populaires</h1>
            </div>
            <h2>Les meilleurs selfies de poulets</h2>
        </div>
        <nav>
                <ul>
                    <li><a href="/register">Inscription</a></li>
                    <li><a href="/login">Connexion</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </ul>
            </nav>
    </header>
    <!-- Le contenu -->
    @yield("content")



<footer>

    <div id="tweet">
        <h1>Microblogging</h1>
        <p>!</p>
        <p>ca vous a ...</p>
    </div>
    <div id="mes_photos">
        <h1>Exemples de PHP</h1>
        <p><img src="" alt="Poulet 1" /><img src="" alt="Poulet 2" /><img src="" alt="Poulet 3" /><img src=""
                alt="Poulet 4" /></p>
    </div>
    <div id="mes_amis">
        <h1>Nos informations</h1>
        <div id="listes_amis">
            <ul>
                <li><a href="https://github.com/Astating">Constant</a></li>
                <li><a href="https://github.com/celinelouaintier">Celine</a></li>
                <li><a href="https://github.com/EstherL6">Esther</a></li>
                <li><a href="https://github.com/Soso-M">Sonia</a></li>
            </ul>
        </div>
    </div>
</footer>
</div>
</body>

</html>
