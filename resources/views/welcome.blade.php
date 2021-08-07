<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TodoList Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--styles-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="background-color:#4A5566;">
        <section style="box-sizing:border-box;padding: 10px ;font-weight:bold;font-size:2.5vw;color:#4A5566;background:#fff;width:100%;margin:0px;text-align:center">
           Laravel-VueJS  Project 01 
        </section>
        <hr style="background:#fff;color:#fff;width:50%;height:3px">
        <hr style="background:#fff;color:#fff;width:50%;height:3px">
        <div id="app">
            <app></app>
        </div>
    </body>
    <script src="{{ mix('js/app.js')}}">

    </script>
</html>
