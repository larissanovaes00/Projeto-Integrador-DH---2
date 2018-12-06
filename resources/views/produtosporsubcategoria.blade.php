@extends('layouts.apphome')

@section('content')

        @include('header')

        @include('navbar')

        <div class="container">
            <div class="row">  
                @if(count($produtos) <= 0)
                    <div class="col-12 titulo-secao">
                        <h3>Ops, isso é constrangedor...</h3>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 mensagem">
                        <img src="/img/nothing_found.svg" alt="Logotipo loja sense" class="icon-sad img-fluid">
                        <h6>Não existem produtos com esta subcategoria <strong>ainda</strong></h6>
                        <h4>Mas não vá embora, pesquise por outros produtos</h4>
                    </div>
                @else
                <div class="col-12 titulo-secao">
                        <h3>Produtos</h3>
                </div>
                @foreach($produtos as $produto)
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card box-shadow">
                        <a href="/produto/{{$produto['idproduto']}}">
                            <img class="card-img-top img-fluid"  alt="Thumbnail [100%x225]" style="height: 200px; width: 200px; display: block; margin: 0 auto;" src="{{ asset("storage/produtos/{$produto["imagens"][0]["caminho_imagem"]}") }}" data-holder-rendered="true">
                        </a>
                        <div class="card-body">
                            @foreach($produto["marca"] as $nome)
                                <h6>{{$nome->marca}}</h6>
                            @endforeach
                            <h6>{{$produto['nome']}}</h6>
                            <div class="infos-precos">
                                <small class="text-muted preco-antigo">R${{$produto["preco_antigo"]}}</small>
                                <h4 id="preco">{{$produto["preco"]}}</h4>
                                <small class="text-muted">2X de {{$produto["parcelado"]}},00</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center btn-comprar">
                                <button class="btn btn-info btn-lg btn-block">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        @include('footer')

        @include('bottom')
@endsection