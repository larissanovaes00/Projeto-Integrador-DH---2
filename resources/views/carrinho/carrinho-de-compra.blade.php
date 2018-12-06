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

        <div class="container-fluid">

        <h1>Seu carrinho de compras</h1>

        @if(Session::has('Carrinho'))
            <div class="row">
                <div class="col-12">
                    <ul class="list-group">
                        @foreach($carrinho["produtos"] as $elemento)
                            <li class="list-group-item">
                                <span class="badge badge-primary">Quantidade: {{$elemento["qty"]}}</span>
                                <span class="badge badge-success">Preço unitário: {{$elemento["item"]["preco"]}}</span>
                                <strong>{{$elemento["item"]["prod_nome"]}}</strong>
                                <a href="/reduce/{{$elemento['item']['id_produto']}}" class="btn btn-secondary">Tirar um {{$elemento["item"]["prod_nome"]}}</a>
                                <a href="/remove/{{$elemento['item']['id_produto']}}" class="btn btn-danger">Remover todos</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3><strong>Total: {{$carrinho["totalPrice"]}}</strong></h3>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <a href="/checkout" class="btn btn-success">Checkout</a>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12">
                    <h2>Seu carrinho está vazio =(</h2>
                    <small><a href="/home">Adicionar itens ao carrinho</a></small>
                </div>
            </div>
        @endif
        
        </div>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="<?php echo asset ('bootstrap/js/bootstrap.min.js'); ?>" > </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>

