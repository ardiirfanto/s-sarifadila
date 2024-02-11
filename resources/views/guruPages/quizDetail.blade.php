@extends('layouts.guru')

@section('content')
    <h1 class="text-xl text-center font-semibold mb-6">Kuis {{ $data->pelajaran }}</h1>
    <div class="grid grid-cols-12 gap-3">
        <div class="lg:col-span-8 col-span-12">
            <livewire:question-list :id='$data->id'/>
        </div>
        <div class="lg:col-span-4 col-span-12">
            <livewire:create-question-form :id='$data->id'/>
        </div>
    </div>
@endsection