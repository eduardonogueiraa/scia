@extends('layouts.app2')
@section('title','entre ou cadastre-se')

@section('conteudo')

  
        <div class="actions">
          <a href="{{route('users.criar')}}" class="btn-get-started">Registrar-se</a>
          <a href="{{url('login')}}" class="btn-services">Login</a>
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

      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

@endsection