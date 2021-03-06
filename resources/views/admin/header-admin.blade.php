<div class="container-fluid loja-header">
    <div class="row">
        <!-- Logotype -->
        <div class="logotipo col-12 col-md-6 col-lg-6 col-xl-6">
            <a href="/home"><img src="/img/logotipo_sense.svg" alt="Logotipo loja sense"></a>
        </div>

        <!-- User controls -->
        <div class="user-controls col-12 col-md-6 col-lg-6 col-xl-6">
            <a href="/profile" class="btn btn-outline-light">Olá, {{ Auth::user()->name }}</a>
            <a href="/admin/logout" class="btn btn-danger">Sair</a>
        </div>
        
    </div>
</div>