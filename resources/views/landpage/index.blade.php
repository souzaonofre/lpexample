@extends('layouts.default')

@section('content')
<!-- LandPage content -->
<section class="langpage text-white text-center">

  <div class="overlay"></div>

  <div class="container landpage-container">
    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <h1 class="title-campaign">Este é o Titulo da sua Campanha...</h1>
        <p class="text-campaign">Aqui voce deve digitar o texto que define o objetivo de sua campanha junto ao seu publico alvo...</p>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        @include('landpage.form')
      </div>

    </div>

  </div>

</section>
<!-- end LandPage content -->
@endsection
