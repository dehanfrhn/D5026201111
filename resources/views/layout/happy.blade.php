
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Kepegawaian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/scss/style.css')}}">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://kit.fontawesome.com/2dccfba5fd.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
</head>
<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" style="text-align: center">Aplikasi<br>Kepegawaian</a>
                <a class="navbar-brand hidden"><i class="far fa-compass"></i></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/pegawai"> <i class="menu-icon fa fa-users"></i>Pegawai</a>
                        <a href="/absen"> <i class="menu-icon fa fa-calendar-check"></i>Absen</a>
                        <a href="/pendapatan"> <i class="menu-icon fa fa-money-check-alt"></i></i>Pendapatan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>


    <div id="right-panel" class="right-panel">


        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-5">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="user-area">
                        <a href="#" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar" src="{{asset('tugas1/pasfoto.jpg')}}" alt="User Avatar">
                        </a>
                    </div>

                    <div style="margin-right: 50px; text-align: right; font-weight: 500">
                        <a>M Farhan Rahmandika</a>
                        <br>
                        <a>5026201111</a>
                    </div>

                </div>
            </div>

        </header>


        <div class="breadcrumbs">
            <div class="col-sm">
                <div class="page-header float-left">
                    <div class="page-title" style="font-size: 20px; font-weight: bold; padding-top: 15px; padding-bottom: 15px">
                        @yield('judulhalaman')
                    </div>
                </div>
            </div>
        </div>

        @section('konten')
        @show

        <footer id="footer" class="footer">
            <div class="copyright" style="margin-left: 10px">
                <h6>
                    &copy; Hak Cipta oleh 5026201111 - M Farhan Rahmandika
                </h6>
            </div>
        </footer>






    </div>




    <script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>


</body>
</html>
