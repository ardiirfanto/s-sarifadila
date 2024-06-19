@extends('layouts.petunjuk')

@section('content')
    <h1 class="md:text-2xl text-xl font-semibold text-center uppercase mb-6">Pelajaran 4</h1>
    
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Gerak Dasar Lokomotor Senam Lantai</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Gerak Dasar Nonlokomotor Senam Lantai</button>
            </li>
            <li role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Gerak Dasar Manipulatif Senam Lantai</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <ul class="list-disc ms-8">
                <li>
                    Guru mengajak siswa menuju area dengan permukaan rata.
                </li>
                <li>
                    Guru menyiapkan matras tiang dan gantung untuk aktifitas senam.
                </li>
                <li>
                    Siswa berdoa dipimpin oleh guru.
                </li>
            </ul>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <ul class="list-disc ms-8">
                <li>
                    Guru mengajak siswa menuju area dengan permukaan rata.
                </li>
                <li>
                    Guru mengatur siswa agar tidak saling bersinggungan.
                </li>
                <li>
                    Siswa berdoa dipimpin oleh guru.
                </li>
            </ul>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <ul class="list-disc ms-8">
                <li>
                    Guru mengajak siswa menuju ruang terbuka dengan permukaan rata dan memiliki dinding untuk bersender.
                </li>
                <li>
                    Guru menyiapkan matras untuk gerakan senam.
                </li>
                <li>
                    Siswa berdoa dipimpin oleh guru.
                </li>
            </ul>
        </div>
    </div>
@endsection