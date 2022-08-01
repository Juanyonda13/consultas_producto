<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
    <div class="container card shadow">
        <label for=""><h1>primera consulta</h1></label>
        @foreach ($hola as $h)
            <div class="card container m-5 shadow col-5">
                <p class="text-dark mw-100">{{$h}}</p>
            </div>       
        @endforeach  
    </div>

    <div class="container card shadow">
        <label for=""><h1>segunda consulta</h1></label>
        @foreach ($hola2 as $h2)
            <div class="card container m-5 shadow col-5 ">
                <p class="text-dark mw-100">{{$h2}}</p>
            </div>       
        @endforeach 
    </div>

    <div class="container card shadow">
        <label for=""><h1>tercera consulta</h1></label>
        @foreach ($hola3 as $h3)
            <div class="card container m-5 shadow col-5 ">
                <p class="text-dark mw-100">{{$h3}}</p>
            </div>       
        @endforeach 
    </div>


</body>
</html>
