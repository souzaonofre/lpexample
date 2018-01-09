<!-- LandPage form -->

@if ($errors->any())
    <div id="form-error" class="alert alert-danger">
        <span>"Erro de validação dos dados, favor revisar o formulário!"</span>
    </div>
@endif

<form id="form-visitante" action="{{url('/visitantes')}}" method="POST">

    {{ csrf_field() }}

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default bg-gray-ligth">

            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Cadastre aqui seus dados:
                    </a>
                </h4>
            </div>

            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    @include('landpage.form-dados')
                </div>
            </div>

        </div>

        <div class="panel panel-default bg-gray-ligth">

            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Dados do seu Endereço:
                </a>
              </h4>
            </div>

            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    @include('landpage.form-end')
                </div>
            </div>

        </div>

    </div>
</form>
<!-- end LandPage form -->
