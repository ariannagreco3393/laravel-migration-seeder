@extends('layouts.main')

@section('head-title', 'VP Travel | Pacchetti' )

@section('main-content')
<div class="container-main flex packages-travel">
    <h1>Pacchetti di viaggio</h1>
    <ul class="list-travels list-style-none">
        @foreach ($travels as $travel)
        <li class="travel-item">
            <div class="details">
                {{$travel->name}} | Destinazione: {{$travel->destination}} |
                Data di partenza: {{$travel->departure_date}} | Giorni: {{$travel->days}}
            </div>
        </li>
        @if(! $loop->last)
        <hr>
        @endif
        @endforeach
    </ul>
</div>
@endsection