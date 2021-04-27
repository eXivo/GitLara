<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto">
        <form method="POST" action="/generator">
            @csrf
            <input class="" type="text" name="productID">
            <button type="submit">Submit</button>
        </form>
    </div>

    <div>

        <p> Your new SC code is ...</p>

    </div>
</body>
</html>