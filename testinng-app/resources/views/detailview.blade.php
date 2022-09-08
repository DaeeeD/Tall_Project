

<h1>Hello world ! </h1>

@foreach($response as $currency)
<div class="no-underline text-black">
    Name: {{ $currency ['name']}}
</div>
<div class="no-underline text-black">
    Test: {{ $currency ['1d']['price_change_pct']}}
</div>
@endforeach
