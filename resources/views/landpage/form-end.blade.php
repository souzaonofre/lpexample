
  <div class="form-row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('endereco') ? ' has-error' : '' }}">
            <label for="endereco" class="control-label">Endereço</label>
            <input type="text"
                id="endereco"
                name="endereco"
                value="{{$visitante ? $visitante->endereco : ''}}"
                class="form-control form-control-sm"
                placeholder="Endereço completo..."
                title="Digite aqui seu endereço completo com numero!"
                required>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('bairro') ? ' has-error' : '' }}">
            <label for="bairro" class="control-label">Bairro</label>
            <input type="text"
                id="bairro"
                name="bairro"
                value="{{$visitante ? $visitante->bairro : ''}}"
                class="form-control form-control-sm"
                placeholder="Bairro..."
                title="Digite aqui o seu Bairro."
                required>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('cidade') ? ' has-error' : '' }}">
            <label for="cidade" class="control-label">Cidade</label>
            <input type="text"
                id="cidade"
                name="cidade"
                value="{{$visitante ? $visitante->cidade : ''}}"
                class="form-control form-control-sm"
                placeholder="Cidade..."
                title="Digite aqui sua Cidade."
                required>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group {{ $errors->has('uf') ? ' has-error' : '' }}">
            <label for="uf" class="control-label">UF</label>
            <input type="text"
                id="uf"
                name="uf"
                value="{{$visitante ? $visitante->uf : ''}}"
                class="form-control form-control-sm"
                placeholder="Sigla Estado ex.: MG..."
                title="Digite aqui a sigla do seu Estado, ex.: MG"
                required>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <button type="submit" class="btn btn-block btn-lg btn-primary">Enviar Dados</button>
    </div>

  </div>
