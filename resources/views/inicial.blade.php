@extends('layouts.app2')
@section('title','Página Inicial')

@section('conteudo')
  
        <div class="actions">
          <a href="{{route('logout')}}" class="btn-services">Sair</a>
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
          <li><a href="#portfolio">Disciplinas</a></li>
          <li><a href="#contact">Postagem</a></li>
          @if (auth()->user()->tipo=="admin")
          <li><a href="{{route('disciplina')}}"> Nova Disciplina </a></li>
          @endif
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  Porfolio Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Disciplinas</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Selecione para visualizar as postagens cadastradas</p>
        </div>
      </div>
      <div class="col-md-6 col-md-push-3">
        <div class="form">
           <form action="{{route('postagem.mostrar')}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <div class="form-group">
               <select class="form-control" id="exampleFormControlSelect1" name="id">
                  @foreach ($disciplinas as $disciplina)
                    <option value="{{$disciplina['id']}}">
                      {{$disciplina['nome']}}
                    </option>
                    @endforeach
                 </select>
                  <div class="text-center"><button type="submit">OK</button></div>
                </div>
              </div>
            </form>
        </div>
      </div>
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
            <div id="sendmessage">Sua postagem foi feita</div>
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
                  @foreach ($disciplinas as $disciplina)
                    <option value="{{$disciplina['id']}}">
                      {{$disciplina['nome']}}
                    </option>
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



