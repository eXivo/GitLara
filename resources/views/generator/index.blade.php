@extends("layouts.app")

@section("content")
    <form method="POST" action="{{ route('generator.store') }}"
          class="bg-blue text-center w-1/3 px-3 py-4 text-black mx-auto rounded">
        @csrf
        <input type="text" name="product_id" placeholder="Product ID"
               class="block w-full mx-auto text-sm py-2 px-3 border-black"/>
        {{--            <div class="block w-full mx-auto text-sm py-2 px-3 rounded my-3">  </div>--}}
        <button type="submit" class="bg-blue text-black font-bold py-2 px-4 rounded border block mx-auto w-full">
            Submit
        </button>
    </form>

@endsection
