<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sense Cosméticos</title>
        <link rel="stylesheet" href="<?php echo asset('css/header.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/banner.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/vitrine.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/footer.css');?>" />
        <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
    </head>
    <body>

        @include('header')

        @include('banner')

        @include('vitrine')

        @include('footer')

     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo asset ('bootstrap/js/bootstrap.min.js'); ?>" > </script>

    </body>

</html>

