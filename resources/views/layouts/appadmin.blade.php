<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar produto</title>
        <link rel="stylesheet" href="<?php echo asset('css/admin/editar-produto.css');?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/general.css');?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/header-admin.css');?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/navbar-admin.css');?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/todosprodutos.css');?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/cadastrar-produto.css');?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/footer-admin.css');?>">
        <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>

    <body>

    <div id="app">
    @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo asset ('bootstrap/js/bootstrap.min.js'); ?>" > </script>
    <script src="<?php echo asset ('js/editarProduto.js'); ?>" > </script>

    </body>

</html>
