<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Registrati</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/logo.png" sizes="50x50"/>
        <link rel="stylesheet" href="{{ url('css/register.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="{{ url('script/register.js') }}" defer></script>
    </head>

    <body>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="images/logo.png">
                <a href="{{ url('register') }}"> Alicya Alderuccio</a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('login') }}" class="nav-link">Accedi</a>
                </li>
            </ul>
        </nav>    

        <div id="container">
            <div id="register">
                <img src="images/bgleftregister.jpg">
                <form  name="register" method='post'>
                    
                    <div id="validation" class="hidden">
                        <p>Inserisci tutti i dati</p>
                    </div>

                    @if($error == 'bad_password')
                        <section class='error'>Caratteri password insufficienti, almeno 8</section>
                        <br>
                    @elseif($error == 'existing')
                        <section class='error'>Nome utente già esistente</section>
                        <br>
                    @endif
                    
                    @csrf
                    <input type='text' name='nome' placeholder="Nome" class="textareastyle" value='{{ old("nome") }}'>
                    <input type='text' name='cognome' placeholder="Cognome" class="textareastyle" value='{{ old("cognome") }}'>
                    <input type='text' name='username' placeholder="Username" class="textareastyle" value='{{ old("username") }}'>
                    <input type='email' name='email' placeholder="Email" class="textareastyle" value='{{ old("email") }}'>
                    <input type='password' name='password' placeholder="Password > 8 caratteri" class="textareastyle">
                    <input type='submit' id="button" value="Registrati">
                </form>
                <img src="images/bgrightregister.jpg">
            </div>
        </div>
    </body>
</html>