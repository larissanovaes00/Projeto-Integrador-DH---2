@extends('layouts.appadmin')

@section('content')

    @include('admin/header-admin')

    @include('admin/navbar-admin')

    <div class="container">
            <div class="row">
                <div class="cabecalho text-center">
                    <h2>Todos os produtos da loja</h2>
                    <p class="lead">
                        Você está no painel de administração da Sense cosméticos.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="lista-produtos">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Preço</th>
                            <th scope="col">SKU</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todosProdutos as $produto)
                                <tr>
                                <th scope="row">{{$produto['idproduto']}}</th>
                                <td>{{$produto['nome']}}</td>
                                <td>{{$produto['marca']['marca']}}</td>
                                <td>{{$produto['preco']}}</td>
                                <td>{{$produto['sku']}}</td>
                                <td><button class="btn btn-dark">Editar produto</button></td>
                                <td><button class="btn btn-danger">Excluir produto</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

        @include('admin/footer-admin')

@endsection


