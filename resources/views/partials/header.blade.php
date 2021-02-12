<header>
    <!-- logo -->
    <div class="img_logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
    
    <!-- navbar -->
    <nav>
        <a href="{{ route('home')}}" class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}">Home</a>
        <a href="{{ route('products')}}" class="{{ Route::currentRouteName() === 'products' ? 'active' : ''}}">Prodotti</a>
        <a href="{{ route('contacts')}}" class="{{ Route::currentRouteName() === 'contacts' ? 'active' : ''}}">Contatti</a>
    </nav>
</header>