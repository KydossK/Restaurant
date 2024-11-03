<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<header>
    <div class="logo-container">
        <img class="logo" src="{{asset('images/fast-food.png')}}" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="{{route('home')}}">Accueil</a></li>
            <li><a href="{{route('carte')}}">Carte</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </nav>
</header>



    @section("content")
    @show


    <footer>
        <div class="footer-container">
            <ul class="social-links">
                <li><a href="#">facebook</a></li>
                <li><a href="#">instagram</a></li>
                <li><a href="#">TikTok</a></li>
            </ul>
            <ul class="footer-info">
                <li>Acme Food</li>
                <li>&copy; 2024</li>
                <li>Tous droits réservés</li>
                <li><a href="#">Mentions légales</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>