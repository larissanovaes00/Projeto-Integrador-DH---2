<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo asset('css/header.css');?>" />
    <link rel="stylesheet" href="<?php echo asset('css/navbar.css');?>" />
    <link rel="stylesheet" href="<?php echo asset('css/banner.css');?>" />
    <link rel="stylesheet" href="<?php echo asset('css/como-comprar.css');?>" />
    <link rel="stylesheet" href="<?php echo asset('css/vitrine.css');?>" />
    <link rel="stylesheet" href="<?php echo asset('css/novidades.css');?>" />
    <link rel="stylesheet" href="<?php echo asset('css/footer.css');?>" />
    <link rel="stylesheet" href="<?php echo asset('css/bottom.css');?>" />
    <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

        <?php


            function existe($arrayInteiro, $idCategoria)
            {
                foreach($arrayInteiro as $item)
                {
                    if($item['idCategoria'] == $idCategoria)
                        return $item;
                }
                return null;
            }

            $menu = array();

            foreach($refCategoria as $subcategoria)
            {
                $idCategoria = $subcategoria->id_categoria;
                $itemExistente = existe($menu, $idCategoria);

                if($itemExistente == null)
                {
                    print($idCategoria);
                        array_push($menu, array(
                            'nome' => $subcategoria->categoria->categoria,
                            'idCategoria' => $subcategoria->id_categoria,
                            'subcategorias' => 
                                array(
                                    $subcategoria->descricao_subcategoria
                                )  
                        ) 
                    );
                } else 
                {
                    // echo('<pre>');
                    // print_r($itemExistente['subcategorias']); 
                    // echo('</pre>');   
                }

                // $itemExistente = existe($menu, $idCategoria);
                // print($subcategoria->categoria->categoria);
                // print_r(count($itemExistente['subcategorias']));
                // array_push($itemExistente['subcategorias'], $subcategoria->descricao_subcategoria);
                // print_r(count($itemExistente['subcategorias']));
            }

            print_r($menu[0]['subcategorias']);
            print ("depois");

            $itemExistente = $menu[0];

            array_push($itemExistente['subcategorias'], "david");
            array_push($itemExistente['subcategorias'], "david1");
            print_r($menu[0]['subcategorias']);



            // echo('<pre>');
            // print_r($menu);
            // echo('</pre>');
        ?>
            


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo asset ('bootstrap/js/bootstrap.min.js'); ?>" > </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>