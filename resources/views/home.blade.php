@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            @forelse ($trains as $train)
                <h2>Treno diretto a {{ $train->stazione_arrivo }}, in partenza da {{ $train->stazione_partenza }}
                    delle ore
                    {{ $train->orario_partenza }}</h2>
                <ul>
                    <li><b>Compagnia: </b>{{ $train->azienda }}</li>
                    <li><b>Orario di arrivo stimato: </b>{{ $train->orario_arrivo }}</li>
                    <li><b>Codice Treno: </b>{{ $train->codice_treno }}</li>
                    <li><b>Numero Carrozze: </b>{{ $train->carrozze }}</li>
                    <li><b>In ritardo: </b>
                        @if ($train->on_time == 1)
                            Nessun Ritardo
                        @else
                            Ci sono ritardi
                        @endif
                    </li>
                    <li><b>Cancellato: </b>
                        @if ($train->canceled == 1)
                            Treno soppresso
                        @else
                            No
                        @endif
                    </li>
                </ul>
            @empty
            @endforelse
        </div>
    </section>
@endsection
