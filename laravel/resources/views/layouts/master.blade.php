<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacker Store | @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-dark m-0 p-0 w-100 h-100">
    @include('layouts.header')

    <div class="container-fluid">
        <div class="row position-relative">
            <div class="logo-blocker"></div>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="logo">
                    <h1>HACKER STORE</h1>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="slogan">
                    <span>Everything that hacker needs.</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <footer>
        HackerCo Copyright © 2021. All rights reserved.
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>