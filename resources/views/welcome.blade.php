@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Homepage</h1>
 @if($nome == 'pedro')
<p>O nome é pedro</p>
@elseif($nome == 'Alex')
<p>O nome é {{$nome}} e tem {{$idade}} anos</p>
@else
<p>O nome não é pedro</p>
@endif
---------------------------------------------------
@for($i = 0; $i < count($arr); $i++)
 <p>{{$arr[$i]}}</p>
@endfor
---------------------------------------------------
@php 
$nomeDoMatheus = "matheus";
echo '<br>' . $nomeDoMatheus; 
@endphp
<br>  --------------------------------------------------- 
@foreach($nomes as $nome)
<br>{{$nome}}
{{$loop->index}}
@endforeach

@endsection