<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
{{--    @vite('resources/js/app.js')--}}
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0 mt-5 d-flex justify-content-between navbar-light">
            <a class="navbar-brand w-25" href="/">Блог пунктiв незламностi</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('post.index') }}">Блог <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('category.index') }}">Категорії <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('tag.index') }}">Теги <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        @auth()
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Персональний центр</a>
                        @endauth
                        @guest()
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Увійти</a>
                        @endguest
                    </li>
                    @if(auth()->user() && auth()->user()->role !== 1 && auth()->user() && auth()->user()->role == 0)
                        <li class="nav-item">
                            @auth()
                                <a class="nav-link" href="{{ route('admin.main.index') }}">Панель Адміністратора</a>
                            @endauth
                        </li>
                    @endif
                    @if(auth()->check())
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input class="btn btn-outline-danger" type="submit" value="Вийти">
                            </form>
                        </li>
                    @endif
                </ul>

            </div>
        </nav>
    </div>
</header>

@yield('content')
<script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>

<script>
</script>


<script>
    AOS.init({
        duration: 1000
    });

</script>
</body>

</html>
