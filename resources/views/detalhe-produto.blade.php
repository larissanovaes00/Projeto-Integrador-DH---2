@extends('layouts.apphome')

@section('content')

        @include('header')

        @include('navbar')

        <div class="container-fluid">
                <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto prod-imgs">
                                <!-- <img src="https://via.placeholder.com/608" class="img-fluid" alt=""> -->
                                <div class="owl-carousel owl-theme">
                                        @php($imagens = $produto['imagens'])
                                        @foreach($imagens as $imagem_caminho)
                                        <div class="item">
                                                <img src="{{ asset("storage/produtos/{$imagem_caminho['caminho_imagem']}") }}" alt="">
                                        </div>
                                        @endforeach
                                </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto prod-infos">
                                <h5>{{$produto['marca'][0]['marca']}}</h5>
                                <h4>{{$produto['nome']}}</h4>
                                <h1>R$ {{$produto['preco']}}</h1>
                                <small>Ou 2X de R$ {{$produto['parcelado']}} no cartão</small>

                                <div class="comprar-produto col-12">
                                        <button class="btn btn-info btn-lg ">Comprar</button>
                                </div>
                        </div>
                </div>
                

                <div class="row mb-4">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 saiba-mais">
                                <h3 class="text-center text-light">Saiba mais sobre este produto:</h3>
                        </div>

                        <div class="col-12 col-sm12 col-md-12 col-lg-6 col-xl-6">                        
                                <div id="accordion">
                                        <div class="card">
                                                <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                        <button class="btn btn-link " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Descrição<i class="far fa-plus-square"></i>
                                                        </button>
                                                </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                        {{$produto['descricao']}}
                                                </div>
                                                </div>
                                        </div>

                                        <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                        Modo de usar<i class="far fa-plus-square"></i>
                                                        </button>
                                                </h5>
                                                </div>

                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                        {{$produto['modo_de_usar']}}
                                                </div>
                                                </div>
                                        </div>
                                        </div>
                                </div>
                        </div>
                        

                </div>
               
        </div>
        @include('footer')

        @include('bottom')
@endsection




