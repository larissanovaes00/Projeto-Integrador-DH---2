<div id="headerLoja" class="container-fluid">
    <div class="row">
        <!-- Promo top -->
        <div class="promo">
            <p>Até 40% off na Black Friday, corre!</p>
        </div>
        <!-- Logotype -->
        <div class="logotipo col-12 col-md-6 col-lg-6 col-xl-6">
            <a href="/home"><img src="/img/logotipo_sense.svg" alt="Logotipo loja sense"></a>
        </div>

        <!-- User controls -->
        <div class="user-controls col-12 col-md-6 col-lg-6 col-xl-6">
            <a href="#"><i class="fas fa-shopping-bag fa-2x"></i></a>
            @guest
                <a class="entrar" href="{{ route('login') }}">Entrar</a>
            @else
            <a href="/profile" class="user-profile">Olá, {{ Auth::user()->name }}</i></a>
            @endguest
        </div>
        
        <!-- Search box -->
        <div class="mb-3 col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="search-box col-12 col-md-11 col-lg-6 col-xl-8">
                <i class="fas fa-search fa-2x search-icon"></i>
                <input type="text" class="form-control search-input" placeholder="Hoje eu quero..." aria-label="" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
</div>