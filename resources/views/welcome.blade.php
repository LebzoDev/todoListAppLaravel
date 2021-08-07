<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body style="background-color:grey;">
        <section style="box-sizing:border-box;padding: 10px ;font-weight:bold;font-size:3vw;color:grey;background:#fff;width:100%;margin:0px;text-align:center">
            Project 01 Laravel VueJS
        </section>
        <hr style="color:#fff;width:50%">
        <div id="app">
            <app></app>
        </div>
    </body>
    <script src="{{ mix('js/app.js')}}">

    </script>
</html>
