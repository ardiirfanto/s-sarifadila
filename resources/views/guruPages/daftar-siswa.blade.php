@extends('layouts.default')

@section('content')
<div class="container">
      <div class="element-heading mt-20">
      <div class="grid lg:grid-cols-1 gap-3 ">
        <div class="text-lg font-semibold text-blue-700 text-center">
            Daftar Siswa
        </div>
      </div>
    </div>

    <livewire:list-siswa />



@endsection