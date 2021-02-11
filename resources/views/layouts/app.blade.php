<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body>
        @include('partials.header')
        @yield('main_content')
        
    </body>
</html>