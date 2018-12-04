<nav class="navbar navbar-expand-lg navbar-light navbar-sense">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <small class="text color-sense">Toque para expandir</small>
</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        @foreach($navbar as $categoria)
                
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$categoria["nome"]}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($categoria["subcategorias"] as $subcategoria)
            <a class="dropdown-item" href="/produtos/{{$subcategoria['id']}}">{{$subcategoria["descricao"]}}</a>
            @endforeach
            </div>
        </li>
        @endforeach
    </ul>
  </div>
</nav>