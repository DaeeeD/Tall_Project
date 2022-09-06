@extends('layouts.base')

@include('layouts.header')

@section('body')
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset


@include('layouts.footer')

@endsection