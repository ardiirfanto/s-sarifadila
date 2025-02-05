@extends('layouts.materi')

@section('content')
    <div class="page-content-wrapper py-3">
        <div class="team-member-wrapper direction-rtl">
            <div class="container">
                <div class="row g-3">
                    @foreach ($data as $item)
                        <div class="col-6 btn-click" id="bab-{{ $item->id }}">
                            <div class="card single-product-card animate-slide-up">
                                <div class="card-body p-3">
                                    <div class="product-thumbnail d-block">
                                        <img style="width: 100%;height:150px;object-fit:cover"
                                            src="{{ asset('assets/img/mapel/' . $item->icon) }}" alt="">
                                        <span class="badge bg-danger">{{ $item->judul }}</span>
                                    </div>
                                    <span class="product-title d-block text-truncate">{{ $item->mapel }}</span>
                                    <p class="text-muted mx-0">{{ $item->name }}</p>
                                    <button
                                        onclick="animateBtnPelajaran('bab-{{ $item->id }}','dashboard/materi-guru/{{ $item->id }}')"
                                        class="btn btn-primary rounded-pill btn-sm ">BUKA MAPEL
                                        {{ $item->bab }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Single Team Member -->
                    <div class="col-12">
                        <div class="card team-member-card shadow">
                            <div class="card-body">
                                <!-- Member Image-->
                                <div class="team-member-img shadow-sm">
                                    <img src="img/bg-img/200.jpg" alt="">
                                </div>
                                <!-- Team Info-->
                                <div class="team-info">
                                    <h6 class="mb-1 fz-14">DASHBOARD DAFTAR SISWA</h6>
                                </div>
                            </div>
                            <!-- Contact Info-->
                            <div class="contact-info bg-info">
                                <a class="btn btn-creative btn-warning" href="/dashboard/daftar-siswa">Update
                                    Daftar Siswa</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
