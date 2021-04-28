@extends("layouts.app")

@section("content")
    <div class="bg-blue text-center w-1/3 px-3 py-4 text-black mx-auto rounded">
        <h1 class="text-2xl">SC code generator</h1>
        <div class="block w-full mx-auto text-sm py-2 px-3 rounded my-3 border-4 border-light-blue-500"> {{ $code }} </div>
    </div>
@endsection
