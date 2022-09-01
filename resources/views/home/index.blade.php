<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

    <div id="app">

        <nav class="navbar navbar-dark bg-dark mb-3 p-3">

            <a class="navbar-brand" href="/login">Logout</a>

        </nav>

        <home-component :fullname="{{$fullname}}"/>
    </div>
    
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>