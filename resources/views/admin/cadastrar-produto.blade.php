<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar produto</title>
        <link rel="stylesheet" href="<?php echo asset('css/admin/cadastrar-produto.css');?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/navbar-admin.css');?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/header-admin.css');?>">
        <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    </head>
  
    <body>

        @include('admin/header-admin')

        @include('admin/navbar-admin')

        @include('admin/formulario-produto')


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo asset ('bootstrap/js/bootstrap.min.js'); ?>" > </script>

    </body>

</html>