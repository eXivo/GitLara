<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto">
        <h1>SC code generator</h1>
        @foreach($SC_code as $code)
            <li class="list-group-item"><h5>{{ $code }}</h5></li>
        @endforeach
    </div>
</body>
</html>