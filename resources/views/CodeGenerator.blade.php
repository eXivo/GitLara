<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>




    <div class="container">
        <div class="bg-blue text-center w-1/3 px-3 py-4 text-black mx-auto rounded">
            <h1 class="text-2xl">SC code generator</h1>
            <div class="block w-full mx-auto text-sm py-2 px-3 rounded my-3 border-4 border-light-blue-500"> {{$SC_code}} </div>
        </div>
    </div>
</body>
</html>