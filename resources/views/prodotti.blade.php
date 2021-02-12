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
                    <div class="card">
                        <div class="img_pasta">
                            <img src=" {{ $pasta['src'] }} " alt="">
                        </div>
                        <div class="hover">
                            <h3>{{ $pasta['titolo'] }}</h3>  
                            <img src=" {{ asset("img/icon.svg")}} " alt="">
                        </div>
                    </div>
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
                <div class="card">
                        <div class="img_pasta">
                            <img src=" {{ $pasta['src'] }} " alt="">
                        </div>
                        <div class="hover">
                            <h3>{{ $pasta['titolo'] }}</h3>  
                            <img src=" {{ asset("img/icon.svg")}} " alt="">
                        </div>
                    </div>
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
                <div class="card">
                        <div class="img_pasta">
                            <img src=" {{ $pasta['src'] }} " alt="">
                        </div>
                        <div class="hover">
                            <h3>{{ $pasta['titolo'] }}</h3>  
                            <img src=" {{ asset("img/icon.svg")}} " alt="">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>


@endsection