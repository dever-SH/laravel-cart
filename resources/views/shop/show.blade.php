@extends('layouts.app')

@section('content')


    <div class="grid sm:grid-cols-2 gap-2 pt-12 sm:pt-20 mx-auto w-4/5">
        <div class="mx-auto">
            <img
                src="{{asset($product->image_path)}}"
                alt="{{$product->name}}">
        </div>

        <div>
            <h2 class="text-xl text-gray-600 font-bold pb-8">
                "{{$product->name}}"
            </h2>

            <p class="font-bold text-l text-black pb-8">
                Price: <span class="text-red-500">$ {{$product->price}} </span>
            </p>

            <p class="font-bold text-l text-black pb-8">
                Shipping: <span class="text-red-500">$ {{$product->shipping_cost}}</span>
            </p>

            <p class="font-thin text-s text-black pb-8">
                Apple M1 Pro, 16 GPU, 16GB, 512 GB SSD
            </p>

            <p class="font-thin text-xs text-black pb-8">
                "{{$product->details}}"
            </p>

            <a
                href="{{route('add.to.cart', $product->id)}}"
                class="px-10 py-6 text-l uppercase text-white font-bold bg-blue-600 rounded-full w-full"
                role="button"
                aria-pressed="true">
                Add To Cart
            </a>
        </div>
    </div>
@endsection
