@extends('layouts.app2')
@section('title','editar')

@section('conteudo')

        <div class="actions">
          <a href="{{route('inicial')}}" class="btn-services">Voltar</a>
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
          <li><a href="#contact">Postagem</a></li>
          <li><a href="{{route('logout')}}"> Sair </a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->


<section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Postagem</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Editar</p>
        </div>
      </div>

      <div class="row">
      

        <div class="col-md-6 col-md-push-3">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="{{route('postagem.update',Request::segment(2))}}" method="post" role="form" class="contactForm">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="form-group">
                <input type="text" name="tema" class="form-control" id="name" placeholder="Tema" data-rule="minlen:4" data-msg="Informe o tema." value="{{$post->tema}}" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="descricao" rows="5" data-rule="required" data-msg="Por favor, preencha o conteúdo." placeholder="Conteúdo">{{$post->descricao}}</textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Salvar alteração</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  @endsection
