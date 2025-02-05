@extends('layouts.materi')

@section('content')
    <div class="page-content-wrapper py-3">
        <div class="team-member-wrapper direction-rtl">
            <div class="container">
                <div class="row g-3">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="text-muted">Mata Pelajaran</h5>
                                        <p class="fs-5">{{ $mapel->mapel }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="col-6">
                        <div class="card team-member-card shadow">
                            <div class="card-body">
                                <!-- Member Image-->
                                <div class="team-member-img shadow-sm">
                                    <img src="{{ asset('img/bg-img/20d.jpg') }}" alt="">
                                </div>
                                <!-- Team Info-->
                                <div class="team-info">
                                    <h6 class="mb-1 fz-14">DASHBOARD KELOLA MATERI</h6>

                                </div>
                            </div>
                            <!-- Contact Info-->
                            <div class="contact-info bg-primary">

                                <a class="btn btn-creative btn-warning" href="{{ url('/dashboard/kelolamateri/'.$mapel->id) }}">Materi dan
                                    Sub Materi</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="col-6">
                        <div class="card team-member-card shadow">
                            <div class="card-body">
                                <!-- Member Image-->
                                <div class="team-member-img shadow-sm">
                                    <img src="{{ asset('img/bg-img/20a.jpg') }}" alt="">
                                </div>
                                <!-- Team Info-->
                                <div class="team-info">
                                    <h6 class="mb-1 fz-14">DASHBOARD VIDEO MATERI</h6>

                                </div>
                            </div>
                            <!-- Contact Info-->
                            <div class="contact-info bg-primary">

                                <a class="btn btn-creative btn-warning" href="{{ url('/dashboard/videomateri/'.$mapel->id) }}">Update Video
                                    Materi</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="col-6">
                        <div class="card team-member-card shadow">
                            <div class="card-body">
                                <!-- Member Image-->
                                <div class="team-member-img shadow-sm">
                                    <img src="{{ asset('img/bg-img/20c.jpg') }}" alt="">
                                </div>
                                <!-- Team Info-->
                                <div class="team-info">
                                    <h6 class="mb-1 fz-14">DASHBOARD MATERI KUIS</h6>

                                </div>
                            </div>
                            <!-- Contact Info-->
                            <div class="contact-info bg-primary">
                                <a class="btn btn-creative btn-warning" href="{{ url('/dashboard/kuis') }}">Update Materi
                                    Kuis</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="col-6">
                        <div class="card team-member-card shadow">
                            <div class="card-body">
                                <!-- Member Image-->
                                <div class="team-member-img shadow-sm">
                                    <img src="{{ asset('img/bg-img/20b.jpg') }}" alt="">
                                </div>
                                <!-- Team Info-->
                                <div class="team-info">
                                    <h6 class="mb-1 fz-14">DASHBOARD HASIL KUIS</h6>
                                </div>
                            </div>
                            <!-- Contact Info-->
                            <div class="contact-info bg-info">
                                <a class="btn btn-creative btn-warning" href="{{ url('/dashboard/hasil-kuis') }}">Update Hasil
                                    Kuis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
