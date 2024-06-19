@extends('layouts.petunjuk')

@section('content')
    <h1 class="md:text-2xl text-xl font-semibold text-center uppercase mb-6">Pelajaran 2</h1>
    
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Gerakan Dasar dalam Gerak Nonlokomotor</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <ul class="list-disc ms-8">
                <li>
                    Guru mengajak siswa menuju lapangan atau area terbuka.
                </li>
                <li>
                    Guru mengatur siswa untuk berbaris dengan jarak yang cukup.
                </li>
                <li>
                    Guru menyiapkan tali atau tongkat kecil dan tiang untuk menggelantung.
                </li>
                <li>
                    Siswa berdoa dipimpin oleh guru.
                </li>
            </ul>
        </div>
    </div>
@endsection