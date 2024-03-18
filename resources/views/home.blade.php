@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <h1 class="text-center py-3">Questi sono tutti i treni presenti sul DB</h1>
    <ol>
        @forelse ($trains as $train)
            <li>Treno con numero identificativo {{ $train->train_code }} in partenza il giorno {{ $train->on_day }} alle ore
                {{ $train->departure_time }}</li>
        @empty
            <h4>Non ci sono treni al momento</h4>
        @endforelse
    </ol>
@endsection
