
  <div class="form-row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('nome') ? ' has-error' : '' }}">
            <label for="nome" class="control-label">Nome</label>
            <input type="text"
                id="nome"
                name="nome"
                value="{{$visitante ? $visitante->nome : ''}}"
                class="form-control"
                placeholder="Nome Completo..."
                title="Digite aqui seu nome completo!"
                autofocus>

            @if ($errors->any() && $errors->has('nome'))
            <p id="nome-error" class="text-center text-danger"><strong>{{ $errors->first('nome') }}</strong></p>
            @endif
        </diV>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">Email</label>
            <input type="email"
                id="email"
                name="email"
                value="{{$visitante ? $visitante->email : ''}}"
                class="form-control"
                placeholder="Email..."
                title="Digite aqui um Email válido!">

            @if ($errors->any() && $errors->has('email'))
            <p id="email-error" class="text-center text-danger"><strong>{{ $errors->first('email') }}</strong></p>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('celular') ? ' has-error' : '' }}">
            <label for="celular" class="control-label">Celular</label>
            <input type="tel"
                id="celular"
                name="celular"
                value="{{$visitante ? $visitante->celular : ''}}"
                class="form-control form-control-sm"
                placeholder="Num. Celular..."
                title="Digite aqui seu numero de Celular.">

            @if ($errors->any() && $errors->has('celular'))
            <p id="celular-error" class="text-center text-danger"><strong>{{ $errors->first('celular') }}</strong></p>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('data_nascimento') ? ' has-error' : '' }}">
            <label for="data_nascimento" class="control-label">Data Nascimento</label>
            <div class="input-group date">
                <input type="text"
                    id="data-nascimento"
                    name="data_nascimento"
                    value="{{$visitante ? $visitante->data_nascimento : ''}}"
                    class="form-control"
                    data-provide="datepicker"
                    placeholder="Data Nascimento..."
                    title="Digite aqui sua Data de Nascimento.">

                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>

            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('cep') ? ' has-error' : '' }}">
            <label for="cep" class="control-label">CEP</label>
            <input type="text"
                id="cep"
                name="cep"
                value="{{$visitante ? $visitante->cep : ''}}"
                class="form-control form-control-sm"
                placeholder="CEP..."
                title="Digite o CEP do seu endereço atual.">

        </div>
    </div>

  </div>
