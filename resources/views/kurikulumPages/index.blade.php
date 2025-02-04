@extends('kurikulumPages.kurikulum')

@section('content')
    <div class="row g-3">

        <!-- Data Guru -->
        <div class="col-6">
            <div class="card team-member-card shadow">
                <div class="card-body">
                    <!-- Member Image-->
                    <div class="team-member-img shadow-sm">
                        <img src="img/bg-img/200.jpg" alt="">
                    </div>
                    <!-- Team Info-->
                    <div class="team-info">
                        <h6 class="mb-1 fz-14">DAFTAR GURU</h6>
                        <p class="text-muted mb-0 mt-0">{{ $guru->count() }} Guru</p>
                    </div>
                </div>
                <!-- Contact Info-->
                <div class="contact-info bg-info">
                    <a class="btn btn-creative btn-warning" href="{{ route('daftar-guru') }}">
                        Daftar Guru
                    </a>
                </div>
            </div>
        </div>

        <!-- Data Mapel -->
        <div class="col-6">
            <div class="card team-member-card shadow">
                <div class="card-body">
                    <!-- Member Image-->
                    <div class="team-member-img shadow-sm">
                        <img src="img/bg-img/20d.jpg" alt="">
                    </div>
                    <!-- Team Info-->
                    <div class="team-info">
                        <h6 class="mb-1 fz-14">DAFTAR MAPEL</h6>
                        <p class="text-muted mb-0 mt-0">{{ $mapel->count() }} Mapel</p>
                    </div>
                </div>
                <!-- Contact Info-->
                <div class="contact-info bg-primary">

                    <a class="btn btn-creative btn-warning" href="{{ route('daftar-mapel') }}">
                        Daftar Mapel
                    </a>
                </div>
            </div>
        </div>

         <!-- Data Mapel -->
         <div class="col-6">
            <div class="card team-member-card shadow">
                <div class="card-body">
                    <!-- Member Image-->
                    <div class="team-member-img shadow-sm">
                        <img src="img/bg-img/p1.jpg" alt="">
                    </div>
                    <!-- Team Info-->
                    <div class="team-info">
                        <h6 class="mb-1 fz-14">DAFTAR SISWA</h6>
                        <p class="text-muted mb-0 mt-0">{{ $siswa->count() }} Siswa</p>
                    </div>
                </div>
                <!-- Contact Info-->
                <div class="contact-info bg-success">

                    <a class="btn btn-creative btn-warning" href="{{ route('daftar-siswa') }}">
                        Daftar Siswa
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
