@extends('layouts.app')

@section('content')


<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
    @foreach($response as $currency)
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <article class="overflow-hidden rounded-lg shadow-lg">
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            {{ $currency ['currency']}}
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm">{{ $currency ['name']}}</p>
                    <p class="text-grey-darker text-sm">{{ $currency ['price']}}</p>
                    <p class="text-grey-darker text-sm">{{ $currency ['circulating_supply']}}</p>
                    <p class="text-grey-darker text-sm">{{ $currency ['market_cap']}}</p>
                </header>
            </article>
        </div>
    @endforeach
    </div>
</div>

@endsection
