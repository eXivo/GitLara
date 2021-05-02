@extends("layouts.app")

@section("content")
    <div class="bg-blue text-center w-1/3 px-3 py-4 text-black mx-auto rounded">
        <h1 class="text-2xl">SC code generator</h1>
        <x-generator.generator :code="$code"/>
    </div>
@endsection
