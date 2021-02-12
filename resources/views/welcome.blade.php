<!-- layout html -->
@extends('layouts.app')

<!-- tag title -->
@section('title')
    HomePage
@endsection

<!-- main -->
@section('main_content')
    <div class="container home d_flex">
    
    @foreach ($db_home as $content)
    <div class="item ">
        <img src="{{ $content['src'] }}" alt="">
        <p>{{ $content['descrizione'] }}</p>
    </div>
    @endforeach
    </div>
@endsection
