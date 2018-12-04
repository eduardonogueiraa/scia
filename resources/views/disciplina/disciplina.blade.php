@extends('layouts.app2')
@section('title','disciplinas')

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
          <li><a href="#contact">Nova disciplina</a></li>
          <li><a href="#testimonials">Disciplinas</a></li>
          <li><a href="{{route('inicial')}}"> Postagem </a></li>
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
          <p class="section-description">Cadastre uma nova disciplina</p>
        </div>
      </div>
      <div class="row">
      

        <div class="col-md-6 col-md-push-3">
          <div class="form">
            <form action="{{route('disciplina.salvar')}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da disciplina" data-rule="minlen:4" data-msg="Informe a disciplina." />
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Disciplinas</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Disciplinas cadastradas até o momento</p>
        </div>
      </div>

      @foreach($disciplinas as $disciplina)
      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <div> <p> {{$disciplina->nome}}</p> </div>
            <br>
             <a href="{{route('disciplina.edit', $disciplina->id)}}"><button type="button" class="btn btn-light" style="float: right; background: none">Editar</button></a>

             <form action="{{route('disciplina.remover', $disciplina->id)}}" method="POST">
              @method('DELETE')
              @csrf
            <button type="submit" class="btn btn-light" style="float: right; background:none">Excluir</button> </form>

             </form>
          </div>
        </div>
      </div>
      @endforeach
  </div>
</section>

@endsection
