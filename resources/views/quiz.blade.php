@extends('layouts.default')
@section('title','Quiz')
@section('content')
    <main class="flex justify-center w-screen pt-5">
        <livewire:form-quiz :data='$getQuestion'/>
    </main>
@endsection
