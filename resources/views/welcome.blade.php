<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TraductorBBDD</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        footer {
            position: fixed;
            height: 100px;
            bottom: 0;
            width: 100%;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="content col-lg-4">

        <div class="text-justify">
            <h1>Que hace esto?</h1>
            <hr>

            <p>Utiliza una base de datos relacional de tal manera que cuando se selecciona un elemento en este caso
                país, podremos decidir las traducciones del mismo, por lo que cada uno de los paises dispone de sus
                datos en 2 idiomas, en este caso solo dos pero pueden ser los que uno quiera y por supuesto con
                todos los contenidos traducidos que uno desee.</p>
            <hr>
            <h3>Carmelo Ramirez</h3>
        </div>
        <div>
            <ul>
                <li>
                    <span>App:getLocate -> </span><code>{{ App::getLocale() }}</code>
                </li>
            </ul>
        </div>

    </div>
    <div class="well content col-lg-8">
        <div class="text-center">
            <h1>Selecciona Idioma</h1>
        </div>

            <div><a href="{{ url('/ca', App::getLocale()) }}"><i class="fa hand-o-right"></i> Català</a></div>

            <div><a href="{{ url('/de', App::getLocale()) }}"><i class="fa hand-o-right"></i> Alemán</a></div>

        <div class="text-center">
            <h1>Ver datos de país</h1>
        </div>

        <div class="text-center">
            <a href="{{ url('/'. App::getLocale().'/ca') }}"><img width="90px;"
                        class="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Catalonia.svg/200px-Flag_of_Catalonia.svg.png"
                        alt=""></a>
            <a href="{{ url('/'. App::getLocale().'/de') }}"><img width="100px;" class=""
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Schwarz_Rot_Gold.svg/220px-Schwarz_Rot_Gold.svg.png"
                        alt=""></a>
        </div>




        <div class="title m-b-md">
            {{ $translation->name }}
        </div>
        <div class="text-center"><p>{{ $translation->history }}</p></div>

        <div class="">
        </div>
    </div>
    <!--<footer class="navbar-fixed-bottom">


    </footer>-->
</div>
</body>
</html>
