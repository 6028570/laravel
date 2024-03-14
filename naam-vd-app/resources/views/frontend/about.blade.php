@extends('frontend.layout') 

@section('content') 

about 

 

<h2>Studenten van 18 jaar en ouder:</h2> 

 

<ul> 

  @foreach ($students as $name => $age) 

  @if ($age >= 18) 

  <li>{{ $name }} - {{ $age }} jaar</li> 

  @endif 

  @endforeach 

</ul> 

@endsection 

 

@section('footer') 

about Footer 

@endsection 