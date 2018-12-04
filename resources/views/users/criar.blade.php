@extends('layouts.app')
@section('title','Registre-se')

@section('conteudo')

<div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">

<section id="contact" style="background: none">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title" style="color: white">Registrar-se</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">
<form method="POST" action="{{route('users.salvar')}}">
    {{ csrf_field() }}
        <div class="col-md-4 col-md-push-4">
          <div class="form">
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="nome" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Preencha o campo" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Informe um email válido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <div>
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Senha">
                  <input type="hidden" name="tipo" value="usuario">
                  <div class="validation"></div>
                </div>
                <div class="validation"></div>
              </div>
              <div class="text-center">
                <div class="actions">
                  <a href="{{url ('/')}}" class="btn-services">Voltar</a>
                  <button type = "submit" class ="btn-get-started"> Enviar </button> 
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

      </div>
    </div>
  </section>
@endsection