@extends('layouts.default')

@section('content')
    <main class="flex justify-center w-screen">
        <livewire:form-quiz :data='$getQuestion'/>
    </main>
@endsection