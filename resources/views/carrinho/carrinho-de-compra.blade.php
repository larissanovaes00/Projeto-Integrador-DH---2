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
        <link rel="stylesheet" href="<?php echo asset('css/carrinho/carrinho.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/vitrine.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/novidades.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/footer.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/bottom.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/detalheprod.css');?>" />
        <!-- OWL CAROUSSEL -->
        <link rel="stylesheet" href="<?php echo asset("owlcarousel/assets/owl.carousel.min.css");?>" />
        <link rel="stylesheet" href="<?php echo asset("owlcarousel/assets/owl.theme.default.min.css");?>" />

        <!-- BOOTSTRAP -->
        <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
    
    <body>

        <div id="app">
        @include('header')

        <div class="container-fluid carrinho-container">
            <div class="row">
                <div class="header-carrinho col-12">
                <h1>Seu carrinho de compras</h1>
            </div>
        </div>

        @if(Session::has('Carrinho'))
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 corpo-carrinho">
                    <?php
                        echo "<pre>";
                        print_r($carrinho);
                        echo "</pre>";
                    ?>
                    <h4 class="text-muted">Seu carrinho tem {{$carrinho["totalQty"]}} produtos</h4>
                    <ul class="list-group">
                        @foreach($carrinho["produtos"] as $elemento)
                            <li class="list-group-item dados-produtos">
                                <h4>{{$elemento["item"]["prod_nome"]}}</h4>
                                <h5>Quantidade: {{$elemento["qty"]}}</h5>
                                <h6>Preço unitário: {{$elemento["item"]["preco"]}}</h6>
                                <hr>
                                <div class="btns-carrinho">
                                <h5>Ações:</h5>
                                <a href="/reduce/{{$elemento['item']['id_produto']}}" class="btn btn-outline-secondary">Tirar um {{$elemento["item"]["prod_nome"]}}</a>
                                <a href="/remove/{{$elemento['item']['id_produto']}}" class="btn btn-outline-danger">Remover todos</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 valor-total">
                    <div class="col-12 infos-total">
                        <h5 class="text-muted">Total:</h5>
                        <h3 class="numero-total"><strong>R${{$carrinho["totalPrice"]}}</strong></h3>
                    </div>
                    <div class="col-12">
                    <a href="/checkout" class="btn btn-info btn-lg btn-block">Finalizar Compra</a>
                    <a href="/home" class="btn btn-outline-dark btn-lg btn-block">Continuar comprando</a>

                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12">
                    <i class="far fa-frown fa-5x"></i>
                    <h2>Seu carrinho está vazio =(</h2>
                    <small><a href="/home">Adicionar itens ao carrinho</a></small>
                </div>
            </div>
        @endif
        </div>

        </div>
        @include('bottom')


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="<?php echo asset ('bootstrap/js/bootstrap.min.js'); ?>" > </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>

