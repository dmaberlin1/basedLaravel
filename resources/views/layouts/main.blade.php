<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{--    <title>{{$title ?? 'Default title from layout'}}</title>--}}
    <title>@yield('title','default title')</title>
    {{--    @isset($description)--}}
    {{--    <meta name="description" content="{{$description}}">--}}
    {{--    @endisset--}}
    @yield('description')
{{--    <link rel="stylesheet" href="{{asset('main.css')}}">--}}
</head>
<body>

@section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home.index')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@show
{{--@endsection--}}
<div class="container mt-3">
    @yield('content')
</div>

@include('layouts.incs.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
