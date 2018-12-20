<div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
                <div class="basic-info col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="header-infos">
                        <h3>Informações básicas do produto</h3>
                    </div>
    
                        <div class="form-group">
                            <label for="productName">* Nome do produto</label>
                            <input type="text" name="product-name" class="form-control" id="productName" placeholder="Digite o nome do produto">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">* Preço do produto</label>
                            <input type="text" name="product-price" id="productPrice" class="form-control" placeholder="Preço atual do produto">
                        </div>

                        <div class="form-group">
                            <label for="productDescription">* Descricao do produto</label>
                            <textarea class="form-control" name="product-description" id="productDescription" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="productDescription">* Modo de usar</label>
                            <textarea class="form-control" name="how-to-use" id="productDescription" rows="3"></textarea>
                        </div>
                </div>

                <div class="aditional-infos col-lg-12 col-xl-12">
                    <div class="header-infos">
                        <h3>Informações adicionais do produto</h3>
                    </div>
                    <div class="form-group">
                        <label for="product-brand">Marca do produto</label>
                        <select class="form-control" id="product-brand" name="id_marca">
                            <option value="" selected disabled>Marca do produto:</option>
                            @foreach($marcas as $marca)
                            <option value="{{$marca->id_marca}}">{{$marca->marca}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product-category">Categoria do produto</label>
                        <select class="form-control" id="product-category" name="id_subcategoria">
                            <option value="" selected disabled>Categoria do produto:</option>
                            @foreach($categorias as $categoria)
                                <optgroup label="{{$categoria['nome']}}">
                                    @foreach($categoria['subcategorias'] as $subcategoria)
                                        <option value="{{$subcategoria['id']}}">{{$subcategoria['descricao']}}</option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productSku">* Código/SKU</label>
                        <input type="text" name="product-sku" class="form-control" id="productSku"placeholder="Digite o código ou SKU do produto">
                    </div>
                </div>
                

                <div class="images-product col-12">
                    <div class="header-infos">
                        <h3>Imagens do produto</h3>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-sm-6 col-lg-6 col-xl-6 fileUpload">
                            <i class="far fa-image fa-3x icone-imagem"></i>
                            <label for="product-picA">Adicionar imagem</label>
                            <input type="file" class="form-control-file upload" id="product-picA" name="product-picA">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-lg-6 col-xl-6 fileUpload">
                            <i class="far fa-image fa-3x icone-imagem"></i>
                            <label for="product-picB">Adicionar imagem</label>
                            <input type="file" class="form-control-file upload" id="product-picB" name="product-picB">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-lg-6 col-xl-6 fileUpload">
                            <i class="far fa-image fa-3x icone-imagem"></i>
                            <label for="product-picC">Adicionar imagem</label>
                            <input type="file" class="form-control-file upload" id="product-picC" name="product-picC">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-lg-6 col-xl-6 fileUpload">
                            <i class="far fa-image fa-3x icone-imagem"></i>
                            <label for="product-picD">Adicionar imagem</label>
                            <input type="file" class="form-control-file upload" id="product-picD" name="product-picD">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary btn-lg enviar-form" type="submit">Cadastrar produto</button>
            </div>
        </form>
</div>