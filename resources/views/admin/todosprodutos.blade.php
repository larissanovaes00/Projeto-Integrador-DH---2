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
                            @foreach($todosProdutos as $item)
                                <tr>
                                <th scope="row">{{$item['idproduto']}}</th>
                                <td>{{$item['nome']}}</td>
                                <td>{{$item['marca']['marca']}}</td>
                                <td>{{$item['preco']}}</td>
                                <td>{{$item['sku']}}</td>
                                <td><a href="/editarformulario/{{$item['idproduto']}}" class="btn btn-dark">Editar produto</a></td>
                                <td><a href="/remover/{{$item['idproduto']}}" class="btn btn-danger">Excluir produto</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{$paginas}}
    </div>

        @include('admin/footer-admin')

@endsection


