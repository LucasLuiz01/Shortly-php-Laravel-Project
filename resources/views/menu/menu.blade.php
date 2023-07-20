@extends('menu/base')
@section('content')
<form action="{{route('post.menu')}}" method="POST">
    @csrf
    <div class="encurtar">
        <input type="hidden" name="token" value="{{ request()->cookie('token') }}"> 
        <input class="input" type="link" placeholder="Insira o Link" name="link" >
        <button type="submit">Encurtar Link</button>
    </div>
</div>
</form>
@foreach ($links as $link )
<div class="container">
    <div class="links">
        <div class="left">
            <span class="textUrl">{{$link['url']}}</span>
            <span class="textUrl">{{$link['shortUrl']}}</span>
        </div>
        <div class="rigth">
            <form id="delete-{{$link['id']}}" action="{{ route('link.delete', ['id' => $link['id']]) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
                <input type="hidden" name="token" value="{{ request()->cookie('token') }}"> 
            </form>
            <span class="login-span">
                <a class="register-link" href="#" onclick="event.preventDefault(); document.getElementById('delete-{{$link['id']}}').submit();">Deletar</a>
            </span>
        </div>
    </div>
</div>
 
@endforeach
@endsection
