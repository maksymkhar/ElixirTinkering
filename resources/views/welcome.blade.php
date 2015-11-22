<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/all.css')  }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css')  }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="jumbotron">
            <div class="content">
                <div class="title">Laravel 5</div>
                <button type="button" class="btn btn-primary">Bootstrap Button</button>

                <div id="app">
                    @{{message}}

                </div>

            </div>
        </div>
    </body>

    <script src=" {{asset('js/all.js')}} "></script>
    <script src=" {{asset('js/main.js')}} "></script>

</html>
