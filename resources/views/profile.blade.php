<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sense Cosméticos</title>
        <link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo asset('css/header.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/navbar.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/banner.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/como-comprar.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/vitrine.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/novidades.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/admin/footer-admin.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/bottom.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/profile.css');?>" />
        <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>


        <div class="container-fluid">
        
            <div class="row">
                <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 header">
                    <div class="profile-image">
                        <img src="https://via.placeholder.com/230" alt="Foto de perfil do usuário">
                    </div>
                    <h1>Olá {{ Auth::user()->name }}</h1>
                    <h3>Email: {{ Auth::user()->email }}</h3>
                </div>
            </div>
            <div class="row acoes">
                @if(Auth::user()->type == 1)
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 acesso">
                            <h3>Painel do Administrador</h3>
                            <a href="#" class="btn btn-light btn-sm">Perfil</a>
                            <a href="/admin/logout" class="btn btn-danger btn-sm">Sair</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 box-vendas">
                                <div class="vendas">
                                    <a href="#">
                                    <i class="fas fa-tags fa-4x"></i>
                                    <h5>Vendas</h5>
                                    </a>
                                </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 box-produtos">
                                <div class="produtos">
                                    <a href="/produtoadmin">
                                        <i class="fas fa-cogs fa-4x"></i>
                                        <h5>Produtos</h5>
                                    </a>
                                </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 box-clientes">
                                <div class="clientes">
                                    <a href="#">
                                        <i class="fas fa-user fa-4x"></i>
                                        <h5>Clientes</h5>
                                    </a>
                                </div>
                        </div>
                @else 
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 acesso">
                    <h3>Perfil de {{ Auth::user()->name }} {{ Auth::user()->sobrenome }} </h3>
                    <a href="logout" class="btn btn-danger btn-sm">Sair</a>
                </div> 
                @endif

            </div>
            
            
        </div>

        @include('admin/footer-admin')



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo asset ('bootstrap/js/bootstrap.min.js'); ?>" > </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

</html>