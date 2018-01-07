@extends('layouts.default')

@section('content')
<!-- LandPage content -->
<section class="langpage text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        @include('landpage.form')
      </div>

    </div>
  </div>
</section>
<!-- end LandPage content -->
@endsection
