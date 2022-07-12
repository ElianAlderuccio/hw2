<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Accedi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/logo.png" sizes="50x50"/>
        <link rel="stylesheet" href="{{ url('css/login.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="{{ url('script/login.js') }}" defer></script>
    </head>


    <body>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="images/logo.png">
                <a href="{{ url('login') }}"> Alicya Alderuccio</a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('profile') }}" class="nav-link">Profilo</a>
                </li>
            </ul>
        </nav>

        <div id="container">
            <div id="login">
                <img src="images/bgleftlogin.jpg">
                <form name="login" method='post'>

                    <div id="validation" class="hidden">
                        <p>Inserisci tutti i dati</p>
                    </div>

                    @if($error == 'wrong')
                        <section class='error'>Username o password errati</section>
                        <br>
                    @endif

                    @csrf
                    <input type='text' name='username' placeholder="Username" class="textareastyle" value='{{ old("username")}}'>
                    <input type='password' name='password' placeholder="Password" class="textareastyle">
                    <input type='submit' id="button" value="Accedi">
                    Non hai ancora un account? <a id="reg" href="{{ url('register') }}">Registrati</a>
                </form>
                <img src="images/bgrightlogin.jpg ">
            </div>
        </div>
    </body>
</html>