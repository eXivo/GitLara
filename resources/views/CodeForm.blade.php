<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
{{--    <div class="container mx-auto">--}}
{{--        <form method="POST" action="{{route('CodeForm.submit')}}">--}}
{{--            @csrf--}}
{{--            <input class="" type="text" name="productID">--}}
{{--            <button type="submit">Submit</button>--}}
{{--        </form>--}}
{{--    </div>--}}

    <div class="container">
        <form method="POST" action="{{route('CodeForm.submit')}}" class="bg-blue text-center w-1/3 px-3 py-4 text-black mx-auto rounded">
            @csrf
            <input type="text" name="productID" placeholder="Product ID" class="block w-full mx-auto text-sm py-2 px-3 rounded border-2 border-black" />
{{--            <div class="block w-full mx-auto text-sm py-2 px-3 rounded my-3">  </div>--}}
            <button type="submit" class="bg-blue text-black font-bold py-2 px-4 rounded border-2 border-black block mx-auto w-full mt-4">
                Submit
            </button>
        </form>
    </div>
</body>
</html>