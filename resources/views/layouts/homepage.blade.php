@extends('layouts.app')
    @section('content')
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
            <div class="main-wrapper">
                @include('layouts.header')

                    @yield('index')
                
                @include('layouts.footer')
            
    @endsection