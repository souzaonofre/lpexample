
  <div class="form-row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group @{{ errors.nome ? ' has-error' : '' }}">
            <label for="nome" class="control-label">Nome</label>
            <input type="text"
                id="nome"
                name="nome"
                v-validate.initial="'required|min:10|max:200'"
                class="form-control"
                placeholder="Nome Completo..."
                title="Digite aqui seu nome completo!"
                autofocus
                required>
               // display errors
                <form-error v-if="errors.title" :errors="errors">
                    @{{ errors.nome }}
                </form-error>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group @{{ errors.nome ? ' has-error' : '' }}">
            <label for="email" class="control-label">Email</label>
            <input type="email"
                name="email"
                v-validate.initial="'required|email'"
                class="form-control"
                placeholder="Email..."
                title="Digite aqui um Email válido!"
                required>
            <div v-show="errors.has('email')" class="help is-danger">{ errors.first('email') }</div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label for="celular" class="control-label">Celular</label>
            <input type="text"
                id="celular"
                name="celular"
                class="form-control form-control-sm"
                placeholder="Num. Celular..."
                title="Digite aqui seu numero de Celular."
                required>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label for="data_nascimento" class="control-label">Data Nascimento</label>
            <div class="input-group date">
                <input type="text"
                    id="data_nascimento"
                    name="data_nascimento"
                    class="form-control form-control-sm"
                    placeholder="Data Nascimento..."
                    title="Digite aqui sua Data de Nascimento."
                    required>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label for="cep" class="control-label">CEP</label>
            <input type="text"
                id="cep"
                name="cep"
                class="form-control form-control-sm"
                placeholder="CEP..."
                title="Digite o CEP do seu endereço atual."
                required>
        </div>
    </div>

  </div>
