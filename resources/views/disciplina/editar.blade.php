@extends('layouts.app2')
@section('title','editar')

@section('conteudo')

        <div class="actions">
          <a href="{{route('disciplina')}}" class="btn-services">Voltar</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header"> 
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#contact">Editar</a></li>
          <li><a href="{{route('logout')}}"> Sair </a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

<!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Disciplina</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Editar</p>
        </div>
      </div>
      <div class="row">
      

        <div class="col-md-6 col-md-push-3">
          <div class="form">
            <form action="{{route('disciplina.update', Request::segment(2))}}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}  
              <div class="form-group">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da disciplina" data-rule="minlen:4" data-msg="Informe a disciplina." value="{{$disciplina->nome}}" />
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
      
@endsection