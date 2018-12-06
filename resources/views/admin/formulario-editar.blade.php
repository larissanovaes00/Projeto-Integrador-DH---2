@extends('layouts.appadmin')

@section('content')

    @include('admin/header-admin')

    @include('admin/navbar-admin')
        <div class="container">
                <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                        <div class="basic-info col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="header-infos">
                                <h3>Editar produto</h3>
                                <p class="lead">
                                    Você está editando um produto dentro da loja
                                </p>
                            </div>
            
                                <div class="form-group">
                                    <label for="productName">* Nome do produto</label>
                                    <input type="text" name="product-name" class="form-control" id="productName" placeholder="Digite o nome do produto" value="{{$produto['prod_nome']}}">
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">* Preço do produto</label>
                                    <input type="text" name="product-price" id="productPrice" class="form-control" placeholder="Preço atual do produto" value="{{$produto['preco']}}">
                                </div>

                                <div class="form-group">
                                    <label for="productDescription">* Descricao do produto</label>
                                    <textarea class="form-control" name="product-description" id="productDescription" rows="3" >{{$produto['prod_descricao']}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="productDescription">* Modo de usar</label>
                                    <textarea class="form-control" name="how-to-use" id="productDescription" rows="3">{{$produto['modo_de_usar']}}</textarea>
                                </div>
                        </div>

                        <div class="aditional-infos col-lg-12 col-xl-12">
                            <div class="header-infos">
                                <h3>Informações adicionais do produto</h3>
                            </div>
                            <div class="form-group">
                                
                                <br>
                                <label for="product-brand">Marca do produto</label>
                                <select class="form-control" id="product-brand" name="id_marca">
                                    <option value="" selected disabled>Marca do produto:</option>
                                    @foreach($marcas as $marca)
                                    <?php
                                        $marcaDoProdAtual = $produto['marca'][0]['id_marca'] == $marca->id_marca;
                                        $selecao = $marcaDoProdAtual ? 'selected="selected"' : "";
                                    ?>
                                    <option value="{{$marca->id_marca}}" {{$selecao}}>
                                        {{$marca->marca}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product-category">Categoria do produto</label>
                                <br>
                                <select class="form-control" id="product-category" name="id_subcategoria">
                                    <option value="" selected disabled>Categoria do produto:</option>
                                    @foreach($categorias as $categoria)
                                        <optgroup label="{{$categoria['nome']}}">
                                            @foreach($categoria['subcategorias'] as $subcategoria)
                                                <?php
                                                    $categoriaDoProdAtual = $produto['id_subcategoria'] == $subcategoria['id'];
                                                    $selecao = $categoriaDoProdAtual ? 'selected="selected"' : "";
                                                ?>
                                                <option value="{{$subcategoria['id']}}" {{$selecao}}>{{$subcategoria['descricao']}}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="productSku">* Código/SKU</label>
                                <input type="text" name="product-sku" class="form-control" id="productSku"placeholder="Digite o código ou SKU do produto" value="{{$produto['codigo_sku']}}">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary btn-lg enviar-form" type="submit">Alterar produto produto</button>
                    </div>
                </form>
        </div>

        @include('admin/footer-admin')

@endsection
