@extends('layouts.app2')
@section('title','conteúdo')

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
          <li><a href="#testimonials">Conteúdos</a></li>
          <li><a href="#contact">Postagem</a></li>
          <li><a href="{{route('logout')}}"> Sair </a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

<!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Conteúdos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Conteúdos cadastrados até o momento</p>
        </div>
      </div>

      @foreach($postagens as $postagem)
      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <div> <p> {{$postagem->tema}}</p> </div>
            <b><img src="/img/quote_sign_left.png" alt=""></b> {{$postagem->descricao}} <small><img src="/img/quote_sign_right.png" alt=""></small>
            <br>
            @if(auth()->user()->id == $postagem->id_usuario)
            <a href="{{route('postagem.edit', $postagem->id)}}"><button type="button" class="btn btn-light" style="float: right; background: none">Editar</button></a>
            @endif
            @if(auth()->user()->id == $postagem->id_usuario or auth()->user()->tipo == "admin")
            <form action="{{route('postagem.remover', $postagem->id)}}" method="POST">
              @method('DELETE')
              @csrf
            <button type="submit" class="btn btn-light" style="float: right; background:none">Excluir</button> 
            @endif
            </form>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </section>

      

 <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Postagem</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Compartilhe conteúdos úteis</p>
        </div>
      </div>

      <div class="row">
      

        <div class="col-md-6 col-md-push-3">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="{{route('postagem.salvar')}}" method="post" role="form" class="contactForm">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="tema" class="form-control" id="name" placeholder="Tema" data-rule="minlen:4" data-msg="Informe o tema." />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1" name="id_disciplina">
                    @foreach($disc as $disci)
                    <option value="{{$disci['id']}}">{{$disci['nome']}}</option>
                    @endforeach
                 </select>
                </div>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="descricao" rows="5" data-rule="required" data-msg="Por favor, preencha o conteúdo." placeholder="Conteúdo"></textarea>
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
