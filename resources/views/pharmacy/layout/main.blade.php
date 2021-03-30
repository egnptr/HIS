<!doctype html>
<head>
    {{-- meta --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') FARMASI</title>
    <meta name="description" content="MJ_Farmasi">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset ('style/assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><i class="fa fa-hospital-o custom"></i> 
                    <div class="col-md-6">Farmasi</div></a>
                <a class="navbar-brand hidden" href="./"><i class="fa fa-hospital-o custom"></i></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url ('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Master Obat</h3><!-- /.menu-title -->
                    <li>
                        <a href="{{ url ('order') }}"> <i class="menu-icon ti-clipboard"></i>Informasi Obat </a>
                        <a href="{{ url ('info') }}"> <i class="menu-icon ti-email"></i>Pesan Obat </a>
                    </li>

                    <h3 class="menu-title">Master Resep</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Resep Pasien</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ url ('addpres') }}">Tambah Resep Pasien</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="{{ url ('infopres') }}">Informasi Resep</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Resep Tebus Obat</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="{{ url ('addran') }}">Tambah Resep Tebus Obat</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{ url ('inforan') }}">Informasi Resep Tebus Obat</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
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

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="avatar/1.jpg" alt="Farmasi">
                        </a>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-id"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                {{-- <i class="flag-icon flag-icon-id"></i> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        @yield('breadcrumbs')

        @yield('content')<!-- .content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ asset ('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset ('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset ('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset ('style/assets/js/main.js') }}"></script>

</body>
</html>
