@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Compagnia</th>
                    <th>Partenza</th>
                    <th>Destinazione</th>
                    <th>Orario di partenza</th>
                    <th>Orario di arrivo stimato</th>
                    <th>Codice Treno</th>
                    <th>Anni Servizio</th>
                    <th>Numero Carrozze</th>
                    <th>In orario</th>
                    <th>Cancellato</th>
                </thead>
                <tbody>
                    @forelse ($trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->azienda }}</td>
                            <td>{{ $train->stazione_partenza }}</td>
                            <td>{{ $train->stazione_arrivo }}</td>
                            <td>{{ $train->orario_partenza }}</td>
                            <td>{{ $train->orario_arrivo }}</td>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->anni_servizio }}</td>
                            <td>{{ $train->carrozze }}</td>
                            <td>{{ $train->on_time ? 'Si' : 'No' }}</td>
                            <td>{{ $train->canceled ? 'Si' : 'No' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%">Nessun Treno</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </section>
@endsection
