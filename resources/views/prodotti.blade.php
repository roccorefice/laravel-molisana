<!-- layout html -->
@extends('layouts.app')

<!-- tag title -->
@section('title')
Prodotti
@endsection

<!-- main -->
@section('main_content')
    <section class="prodotti d_flex">
        @foreach ($db_pasta as $pasta)
            <img src=" {{ $pasta['src'] }} " alt="">
        @endforeach
    </section>
@endsection