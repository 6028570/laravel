@extends('frontend.layout')

@section('content')
    <h2>Contact Page</h2>

    @switch($kleur)
        @case('groen')
            <p style="color: green;">De kleur is groen!</p>
            @break

        @default
            <p>Kleur onbekend.</p>
    @endswitch
@endsection

@section('footer')
    Contact Footer
@endsection
