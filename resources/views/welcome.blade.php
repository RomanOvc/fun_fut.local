<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <title>Football club</title>
    <script>
        $(document).ready(function () {
            $("button#dropdownMenuButton").hover();
        });

    </script>
    <style>

        .dropdown:hover > .dropdown-menu {
            display: block;
        }

        .br0 {
            border-radius: 0px !important;
        }

        .btn-primary {

            background-color: /*#d9275c*/ #f72f57;

            color: white;
            border-color: #ffffff;

        }

        .btn-primaru:hover,
        .btn-primary:focus {
            background-color: #8064A2;
            border-color: #00cc00;
        }

        .btn-primary:visited {

            background-color: blue;

            color: white;

        }
        .btn-light {
            color: #002137;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-light:focus
        {
            background-color: darkorange ;
        }

        .bg-light {
            background-color: #002238!important;
        }



        .container {
            background-color: #002238;
        }

        .container2 {
            background-color: #002238;
        }

        .lol1 {
            background-color: #002238;
        }
        .navbar2{
            background-color: #002238;
        }
        .full-width-image {
            height: 300px;
            background: url("http://www.kinyu-z.net/data/wallpapers/129/1154006.jpg") no-repeat center center fixed;
            background-size: cover;
        }
        .lol2{
            background-color:#4a0072;
        }
        .btn-primary-nav2{
            color: #FFF;
            background-color: #7b1fa2;
            border-color: #7b1fa2;
        }
    </style>
    <script>

    </script>
</head>
<body class=" full-width-image" >

    <nav class="navbar navbar-expand-sm bg-light justify-content-center ">
        <ul class="navbar-nav">
            <li>
                <div class="navbar navbar-expand-sm bg-light justify-content-right">
                    <a href="#" class="fb-ic mr-3" role="button"><i class="fa fa-lg fa-facebook"></i></a>
                    <a href="#" class="tw-ic mr-3" role="button"><i class="fa fa-lg fa-twitter"></i></a>
                    <a href="#" class="vk-ic mr-3" role="button"><i class="fa fa-lg fa-vk"></i></a>
                    <a href="#" class="yt-ic mr-3" role="button"><i class="fa fa-lg fa-youtube"></i></a>
                </div>
            </li>
            <li class="nav-item ">
                <button id="mybut" type="button" class="btn btn-light btn-icon ">
                    <span class="icon"><i class="fa fa-ambulance"></i></span>Стадион
                </button>
            </li>
            <li class="nav-item">
                <button id="but" type="button" class="btn btn-light btn-icon">
                    <span class="icon"><i class="fa fa-ambulance"></i></span>Билеты
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-light btn-icon">
                    <span class="icon"><i class="fa fa-ambulance"></i></span>Болельщику
                </button>
            </li>

        </ul>

    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                 src="https://i.ytimg.com/vi/4uab_jvXfgY/maxresdefault.jpg"
                                 alt="First slide" a href="#">

                            <div class="carousel-caption d-none d-md-block">
                                <h2>Трансферная бомба!!!</h2>
                                <p>В скорем времени игрок присоединтся к команде</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="https://i.ytimg.com/vi/4uab_jvXfgY/maxresdefault.jpg"
                                 alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="https://i.ytimg.com/vi/4uab_jvXfgY/maxresdefault.jpg"
                                 alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container order-1">
        <div class="row lol2">
            <div class="col-md-12  col-md-push-12 col-xs-12 container2">
                <nav class="navbar navbar-expand-sm  justify-content-center lol2">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <div class="dropdown">
                                <div class="btn btn-primary-nav2 br0">Главная команда</div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="">Игроки</a>
                                    <a class="dropdown-item" href="#">Тренерский штаб</a>
                                </div>
                            </div>
                        </li>
                        <span class="border-right"></span>
                        <li class="nav-item">
                            <div class="dropdown">
                                <div class="btn  btn-primary-nav2 br0">Вторая команда</div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="">Игроки</a>
                                    <a class="dropdown-item" href="#">Тренерский штаб</a>
                                </div>
                            </div>
                        </li>
                        <span class="border-right"></span>
                        <li class="nav-item">
                            <div class="dropdown">
                                <div class="btn  btn-primary-nav2 br0">Третья команда</div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="">Игроки</a>
                                    <a class="dropdown-item" href="#">Тренерский штаб</a>
                                </div>
                            </div>
                        </li>

                        <span class="border-right"></span>
                        <li class="nav-item">
                            <div class="dropdown">
                                <div class="btn  btn-primary-nav2 br0">Медиа</div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="">Фото</a>
                                    <a class="dropdown-item" href="#">Видео</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9  col-md-push-12 col-xs-12">
                <div class="container">
                    <div class="row">
                        <br>
                        <div class="card-columns">
                             @foreach($blogs as $blog)
                                <div class="card">
                                    <img class="card-img-top" src="{{$blog->photo_m}}" alt="Card image cap">
                                    <div class="card-body">
                                       <a href=""> <h5 class="card-title">{{$blog->name_blog}}</h5></a>
                                       </div>
                                    <div class="card-footer">
                                        <ul>
                                        <li>
                                        <small class="text-muted">data</small>
                                        </li>
                                            <li>
                                                <small class="text-muted">{{$blog->name}}</small>
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                             @endforeach
                            </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3  col-md-push-12 col-xs-12 lol1">
                <br>
                <div >
                    <button type="button" class="btn btn-primary btn-lg btn-block br0">Билеты на матч</button>
                </div>

                <div>
                    <button type="button" class="btn btn-primary btn-lg btn-block br0">Интернет-магазин</button>
                </div>

                <div>
                    <button type="button" class="btn btn-primary btn-lg btn-block br0">Акредитация СМИ</button>
                </div>

                <div>
                    <button type="button" class="btn btn-primary btn-lg btn-block br0">Турнирная таблица</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-9">--}}
{{--<div class="container">--}}
{{--<!-- Page Heading -->--}}
{{--<!-- Project One -->--}}
{{--<br>--}}
{{--<div class="row">--}}
{{--<div class="col-md-5">--}}
{{--<a href="#">--}}
{{--<img class="img-fluid rounded mb-3 mb-md-0"--}}
{{--src="https://wallpapertag.com/wallpaper/full/1/8/3/939722-fcb-hd-wallpapers-2018-2048x1152-samsung-galaxy.jpg"--}}
{{--alt="">--}}
{{--</a>--}}
{{--</div>--}}
{{--<div class="col-md-7">--}}
{{--<br><br>--}}
{{--<h3>xdgdgdgdxvvxcvxcvxcvxvxcvxcvx</h3>--}}

{{--<a class="btn btn-primary" href="#">View Project</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<hr>--}}
{{--<div class="row">--}}
{{--<div class="col-md-5">--}}
{{--<a href="#">--}}
{{--<img class="img-fluid rounded mb-3 mb-md-0"--}}
{{--src="https://wallpapertag.com/wallpaper/full/1/8/3/939722-fcb-hd-wallpapers-2018-2048x1152-samsung-galaxy.jpg"--}}
{{--alt="">--}}
{{--</a>--}}
{{--</div>--}}
{{--<div class="col-md-7">--}}
{{--<br><br>--}}
{{--<h3>xdgdgdgdxvvxcvxcvxcvxvxcvxcvx</h3>--}}

{{--<a class="btn btn-primary" href="#">View Project</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-3">--}}
{{--<br>--}}
{{--<div>--}}
{{--<button type="button" class="btn btn-primary btn-lg btn-block br0">Билеты на матч</button>--}}
{{--</div>--}}
{{--<br>--}}
{{--<div>--}}
{{--<button type="button" class="btn btn-primary btn-lg btn-block br0">Интернет-магазин</button>--}}
{{--</div>--}}
{{--<br>--}}
{{--<div>--}}
{{--<button type="button" class="btn btn-primary btn-lg btn-block br0">Акредитация СМИ</button>--}}
{{--</div>--}}
{{--<br>--}}
{{--<div>--}}
{{--<button type="button" class="btn btn-primary btn-lg btn-block br0">Турнирная таблица</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<br>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}


<footer class="py-4 bg-dark ">
    <div class="container1 ">
        <a href="#" class="fb-ic mr-3" role="button"><i class="fa fa-lg fa-facebook"></i></a>
        <a href="#" class="tw-ic mr-3" role="button"><i class="fa fa-lg fa-twitter"></i></a>
        <a href="#" class="vk-ic mr-3" role="button"><i class="fa fa-lg fa-vk"></i></a>
        <a href="#" class="yt-ic mr-3" role="button"><i class="fa fa-lg fa-youtube"></i></a>
    </div>
    <!-- /.container -->
</footer>

</body>
</html>
{{--@if (Route::has('login')  )<!--and Auth::user()->status == 'admin'-->--}}
{{--<li class="top-right links">--}}
{{--@auth--}}
{{--<li><a href="">{{Auth::user()->name}}</a></li>--}}
{{--<li><a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--{{ __('Logout') }}--}}
{{--</a></li>--}}
{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--@csrf--}}
{{--</form>--}}
{{--@else--}}
{{--<li><a href="{{ route('login') }}">Login</a></li>--}}
{{--<li><a href="{{ route('register') }}">Register</a></li>--}}
{{--@endauth--}}
{{--</ul>--}}
{{--@endif--}}
{{--</body>--}}
{{--</html>--}}

{{--<ul id="navbar" class="menu">--}}
{{--<li><a href="{{ route('blog.index') }}">blogs</a></li>--}}
{{--<li><a href="{{route('blog.create')}}">Новости</a></li>--}}
{{--<li><a href="#">Видео</a></li>--}}
{{--<li><a href="#">Фото</a></li>--}}
{{--<li><a href="#">Турнирная таблица</a></li>--}}
{{--<li><a href="#">Трансляция</a></li>--}}
{{--@if (Route::has('login')  )<!--and Auth::user()->status == 'admin'-->--}}
{{--<li class="top-right links">--}}
{{--@auth--}}
{{--<li><a href="">{{Auth::user()->name}}</a></li>--}}
{{--<li><a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--{{ __('Logout') }}--}}
{{--</a></li>--}}
{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--@csrf--}}
{{--</form>--}}
{{--@else--}}
{{--<li><a href="{{ route('login') }}">Login</a></li>--}}
{{--<li><a href="{{ route('register') }}">Register</a></li>--}}
{{--@endauth--}}
{{--</ul>--}}
{{--@endif--}}
{{--</div>--}}




<!--/.navbar-collapse -->






