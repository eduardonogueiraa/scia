@extends('layouts.app')
@section('title','login')

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
          <h3 class="section-title" style="color: white">Entrar</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">

        <div class="col-md-4 col-md-push-4">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="{{route('autenticar')}}" method="POST" role="form" class="contactForm">
              {{csrf_field()}}
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <div>
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Senha">
                </div>
                <div class="validation"></div>
              </div>
              <div class="text-center">
                <div class="actions">
                  <a href="{{url('/')}}" class="btn-services">Voltar</a>
                 <button type="submit"> Entrar </button>
                 </form>
                </div>
              </div>
            </section>

@endsection