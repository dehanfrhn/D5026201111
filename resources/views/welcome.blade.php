<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>M Farhan Rahmandika</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    5026201111<br>
                    M Farhan Rahmandika
                </div>

                <div class="links">
                    <a href="tugas1/tugas1.html">Tugas 1</a>
                    <a href="tugas2/tugas2.html">Tugas 2</a>
                    <a href="tugas3/tugas3.html">Tugas 3</a>
                    <a href="praktikum1/praktikum1.html">Praktikum 1</a>
                    <a href="tugas4">Tugas 4</a>
                    <a href="praktikum2">Praktikum 2</a>
                    <a href="ets">ETS</a>
                    <a href="tugasphp">Tugas PHP</a>
                    <a href="/pegawai">CRUD-Pegawai</a>
                    <a href="/pendapatan">CRUD-Pendapatan</a><br>
                    <a href="/absen">CRUD-Absen</a>
                    <a href="/kaos">CRUD-Kaos</a>
                </div>
            </div>
        </div>
    </body>
</html>
