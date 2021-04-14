@extends('master2')
@section('content')
    <div class="container">
        <form class="col-md-12" method="POST" action="{{url('/registrar')}}">
        {{csrf_field()}}
        <div class="results">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <div class="results">
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCPF">CPF</label>
                    <input type="text" class="form-control" name="cpf" placeholder="Apenas os numeros" value="{{old('cpf')}}">
                    <span class="text-danger">  @error('cpf') {{@message}} @enderror </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                    <span class="text-danger">  @error('cpf') {{@message}} @enderror </span>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço de email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Seu email" value="{{old('email')}}">
                    <span class="text-danger">  @error('email') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="inputAddress">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                <span class="text-danger">  @error('nome') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control"  name="endereco" placeholder="Apartamento, hotel, casa, etc.">
                <span class="text-danger">  @error('endereco') {{$message}} @enderror </span>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name ="cidade">
                    <span class="text-danger">  @error('cidade') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputNivel">Nivel de Acesso</label>
                    <select id="inputNivel" class="form-control" name="nivel_de_acesso">
                        <option selected>Escolher...</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                    <span class="text-danger">  @error('nivel_de_acesso') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEstado">Estado</label>
                    <select name="estado" class="form-control">
                        <option selected>Escolher...</option>
                        <option value="Acre">AC - Acre</option>
                        <option value="Alagoas">AL - Alagoas</option>
                        <option value="Amapá">AP - Amapá</option>
                        <option value="Amazonas">AM - Amazonas</option>
                        <option value="Bahia">BA - Bahia</option>
                        <option value="Ceará">CE - Ceará</option>
                        <option value="Distrito Federal">DF - Distrito Federal</option>
                        <option value="Espirito Santo">ES - Espirito Santo</option>
                        <option value="Goiás">GO - Goiás</option>
                        <option value="Maranhão">MA - Maranhão</option>
                        <option value="Mato Grosso">MT - Mato Grosso</option>
                        <option value="Mato Grosso do Sul">MS - Mato Grosso do Sul</option>
                        <option value="Minas Gerais">MG - Minas Gerais</option>
                        <option value="Pará">PA - Pará</option>
                        <option value="Paraíba">PB - Paraíba</option>
                        <option value="Paraná">PR - Paraná</option>
                        <option value="Pernambuco">PE - Pernambuco</option>
                        <option value="Piauí">PI - Piauí</option>
                        <option value="Rio de Janeiro">RJ - Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">RN - Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">RS - Rio Grande do Sul</option>
                        <option value="Rondônia">RO - Rondônia</option>
                        <option value="Roraima">RR - Roraima</option>
                        <option value="Santa Catarina">SC - Santa Catarina</option>
                        <option value="São Paulo">SP - São Paulo</option>
                        <option value="Sergipe">SE - Sergipe</option>
                        <option value="Tocantins">TO - Tocantins</option>
                    </select>
                    <span class="text-danger">  @error('estado') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" name="cep">
                    <span class="text-danger">  @error('cep') {{$message}} @enderror </span>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group col-md-3">
                    <label for="inputTEL">telefone</label>
                    <input class="form-control" type="text" name="telefone">
                    <span class="text-danger">  @error('telefone') {{$message}} @enderror </span>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary col-md-4">Salvar</button>
            </div>
        </form>
    </div>
@stop