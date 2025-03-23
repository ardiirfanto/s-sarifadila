@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="element-heading mt-20">
            <h6>Hasil Kuis</h6>
        </div>
    </div>
    <livewire:score-list :mapel-id="$mapelId" />
@endsection
