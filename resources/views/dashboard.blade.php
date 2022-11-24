<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <form action="{{route('logout')}}" method="get">
    <button class="btn btn-primary" type="submit">Log Out</button>
    </form>
 
    <h1>This is dashboard</h1>
</body>
</html>