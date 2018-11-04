<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SICGEO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" type="image/png" href="https://cdn.icon-icons.com/icons2/550/PNG/512/business-color_books_icon-icons.com_53474.png" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #D6DBDF;
                color: #585F62;
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
                display: flex;
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
                font-size: 150px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 30px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            p{
                font-size: 35px;  
            }

            .m-b-md {
                margin-bottom: 10px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <b>SIC</b>GEO
                </div>
                <p>Sistema Geográfico de Información Centralizada de Pacto</p>
                <div class="links">
                    <a href="http://pacto.gob.ec/" target="_blank">G.A.D. PARROQUIA PACTO</a>
                    <a href="https://www.ute.edu.ec/" target="_blank"> UTE</a>
                </div>
            </div>
        </div>
    </body>
</html>
