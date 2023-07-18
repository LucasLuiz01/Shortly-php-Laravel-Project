@extends('base')

@section('content')
   
        <form action="{{route('app.register.post')}}" method="POST">
            @csrf
            <div class="formulario">
            <input class="input" type="nome" placeholder="Nome" name="nome" >
            @error('senha')
            <div class="error-message">{{ $message }}</div>
        @enderror
            <input class="input" type="email" placeholder="Email" name="email" >
            @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror
            <input class="input" type="senha" placeholder="Senha" name="senha" >
            @error('senha')
            <div class="error-message">{{ $message }}</div>
        @enderror
            <input class="input" type="confirmPassword" placeholder="COnfirme a senha" name="confirmPassword" >
            @error('confirmPassword')
            <div class="error-message">{{ $message }}</div>
        @enderror
            <button type="submit">Cadastrar</button>
        </div>
        </form>
 
@endsection
