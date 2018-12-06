<div class="container">
    <div class="col-12 titulo-secao">
        <h3>Destaques</h3>
    </div>
    <div class="row">  
        @foreach($destaqueProdutos as $produto)
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
            <div class="card box-shadow" id="photo-prod">
                <a href="produto/{{$produto['idproduto']}}">
                    <img class="card-img-top img-fluid"  alt="Thumbnail [100%x225]" style="height: 200px; width: 200px; display: block; margin: 0 auto;" src="{{ asset("storage/produtos/{$produto["imagens"][0]["caminho_imagem"]}") }}" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    @foreach($produto["marca"] as $marca)
                        <small>{{$marca["marca"]}}</small>
                    @endforeach
                    <h6>{{$produto["nome"]}}</h6>
                    <div class="infos-precos">
                        <small class="text-muted preco-antigo">R${{$produto["preco_antigo"]}}</small>
                        <h4 id="preco">{{$produto["preco"]}}</h4>
                        <small class="text-muted"> 2X de {{$produto["parcelado"]}},00</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center btn-comprar">
                        <a class="btn btn-info btn-lg btn-block" href="/addCarrinho/{{$produto['idproduto']}}">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
