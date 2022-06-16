@extends('layouts.main')

@section('title', 'Product')

@section('content')
@if($id != null)
<p>Exibindo Produto: {{$id}}</p>
<a href="/">Voltar para home</a>
@else
<p>O produto que você tentou acessar não existe, estamos trabalhando nisso...</p>
<a href="/">Voltar para home</a>
@endif
@endsection