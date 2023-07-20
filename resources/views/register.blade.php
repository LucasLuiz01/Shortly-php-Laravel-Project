@extends('base')

@section('content')
    <form action="{{ route('app.register.post') }}" method="POST">
        @csrf
        <div class="formulario">
            <input class="input" type="nome" placeholder="Nome" name="nome">
            @if($errors->has('nome'))
                <div class="error-message">{{ $errors->first('nome') }}</div>
            @endif

            <input class="input" type="email" placeholder="Email" name="email">
            @if($errors->has('email'))
                <div class="error-message">{{ $errors->first('email') }}</div>
            @endif

            <input class="input" type="senha" placeholder="Senha" name="senha">
            @if($errors->has('senha'))
                <div class="error-message">{{ $errors->first('senha') }}</div>
            @endif

            <input class="input" type="confirmPassword" placeholder="Confirme a senha" name="confirmPassword">
            @if($errors->has('confirmPassword'))
                <div class="error-message">{{ $errors->first('confirmPassword') }}</div>
            @endif

            <button type="submit">Cadastrar</button>
        </div>
    </form>
@endsection
