<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacker Store | @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-dark m-0 p-0 w-100 h-100">

    <div class="container d-flex justify-content-center" style="height:90%;">
        <div class="content-wrapper-blank align-self-center" style="max-height:0;overflow:hidden;padding:0 3em;transition:all 1s;">
            @yield('content')
        </div>
    </div>
    <footer>
        HackerCo Copyright © 2021. All rights reserved.
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
                $('.content-wrapper-blank').css({'max-height':'100%','padding':'3em'});
            },400)
        });

        $('a[href]').on('click', function () {
                performPageTransition(this.getAttribute('href'));
                return false;
        });

        function performPageTransition(newUrl) {
            $('.content-wrapper-blank').css({'max-height':'0','padding':'0 3em'});
            setTimeout(function () {
                window.location = newUrl;
            }, 900);
        }

    </script>
</body>
</html>