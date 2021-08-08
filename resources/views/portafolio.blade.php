
@extends('plantilla')
@section('title', 'portafolio')
@section('contact')
<h1> portafolio</h1>
 <ul> @foreach ($portafolio as $portafolii)
 <li> {{$portafolii['title']}}</li>
 @endforeach
 



 </ul>
@endsection
