@extends('base')

@section('content')
<form action="{{route('app.login.post')}}" method="POST">
    @csrf
    <div class="formulario">
    <input class="input" type="email" placeholder="Email" name="email" >
    @error('email')
    <div class="error-message">{{ $message }}</div>
    @enderror
    <input class="input" type="password" placeholder="password" name="password" >
    @error('password')
    <div class="error-message">{{ $message }}</div>
    @enderror
    <button type="submit">Entrar</button>
</div>
</form>
@endsection
