@extends('master')
@section('content')
    <form class="form-signin" method ="POST" action = "{{url('/logando')}}">
    @csrf
      <h1 class="h3 mb-3 font-weight-normal text-center">Faça login</h1>
      <label for="inputNumber" class="sr-only">CPF</label>
      <input type="text" id="inputNumber"  class="form-control" name="cpf" placeholder="CPF - somente os numeros" onkeypress="return onlynumber();" required autofocus value="{{old('cpf')}}">
      <span class="text-danger">@error('cpf') {{$message}} @enderror</span>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="password" class="form-control" name="password" placeholder="Senha" required>
      <span class="text-danger">@error('password') {{$message}} @enderror</span>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 - Seção de Manutenção</p>      
      <p class = "text-center text-danger">
      </p>
    </form>
@stop