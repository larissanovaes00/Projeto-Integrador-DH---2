<div class="container">
    <div class="col-12 titulo-secao">
        <h3>NOSSOS PRODUTOS</h3>
    </div>
    <div class="row">  


        @foreach($nossosProdutos as $produtos)
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <div class="card box-shadow">
                <a href="produto/{{$produtos['idproduto']}}">
                    <img class="card-img-top img-fluid"  alt="Thumbnail [100%x225]" style="height: 200px; width: 200px; display: block; margin: 0 auto;" src="{{ asset("storage/produtos/{$produtos["imagens"][0]["caminho_imagem"]}") }}" data-holder-rendered="true">
                </a>               
                 <div class="card-body">
                    @foreach($produtos["marca"] as $marca)
                        <small>{{$marca["marca"]}}</small>
                    @endforeach
                    <h6>{{$produtos["nome"]}}</h6>
                    <div class="infos-precos">
                        <small class="text-muted preco-antigo">R${{$produtos["preco_antigo"]}}</small>
                        <h4 id="preco">R${{$produtos["preco"]}}</h4>
                        <small class="text-muted"> 2X de {{$produtos["parcelado"]}}</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center btn-comprar">
                        <button class="btn btn-info btn-lg btn-block">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
