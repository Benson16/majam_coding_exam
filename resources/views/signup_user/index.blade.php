<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div id="app">

        <nav class="navbar navbar-dark bg-dark mb-3 p-3">

            <a class="navbar-brand" href="/login">Back</a>

        </nav>

        <div class="container">

            
            <userlist-component />
        </div>

    </div>
    
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>