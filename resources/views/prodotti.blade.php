<!-- layout html -->
@extends('layouts.app')

<!-- tag title -->
@section('title')
Prodotti
@endsection

<!-- main -->
@section('main_content')
    <!-- sezione pasta lunga -->
    <section class="prodotti" style="background-image: url('{{ asset("img/fondo-pag-speciali.jpg")}}')">
        <h2>LE LUNGHE</h2>
        <div class="container">
            @foreach ($db_pasta as $pasta)
            @if ( $pasta['tipo'] === "lunga")
            <img src=" {{ $pasta['src'] }} " alt="">
            @endif
            @endforeach
            
        </div>
    </section>
    
    <!-- sezione pasta corta -->
    <section class="prodotti" style="background-image: url('{{ asset("img/fondo-pag-speciali.jpg")}}'); ">
        <h2>LE CORTE</h2>
        <div class="container">
            @foreach ($db_pasta as $pasta)
            @if ( $pasta['tipo'] === "corta")
            <img src=" {{ $pasta['src'] }} " alt="">
            @endif
            @endforeach

        </div>
    </section>
    
    <!-- sezione pasta cortissima -->
    <section class="prodotti" style="background-image: url('{{ asset("img/fondo-pag-speciali.jpg")}}')">
        <h2>LE CORTISSIME</h2>
        <div class="container">
            @foreach ($db_pasta as $pasta)
            @if ( $pasta['tipo'] === "cortissima")
            <img src=" {{ $pasta['src'] }} " alt="">
            @endif
            @endforeach
        </div>
    </section>


@endsection