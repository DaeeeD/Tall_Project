@extends('layouts.app')

@section('content')

<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4 w-5/6">
    @foreach($response as $currency)
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <article class="overflow-hidden rounded-lg shadow-lg">
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <div class="w-1/6">
                            <!-- TODO Changer cette gestion de la view -->
                        <a href="{{ route('detailview') }}"><img src="{{ $currency['logo_url']}}">
                        </a> 
                        </div>
                        <div class="no-underline text-black">
                            Name: {{ $currency ['name']}}
                        </div>
                        <div class="no-underline text-black">
                            Price: € {{ $currency ['price']}}
                        </div>
                        <div class="no-underline text-black">
                            Circulating supply: {{ $currency ['circulating_supply']}}
                        </div>
                        <div class="no-underline text-black">
                            Market Cap : {{ $currency ['market_cap']}}
                        </div>
                    </h1>
                </header>
            </article>
        </div>
        @endforeach
    </div>
</div>

@endsection
