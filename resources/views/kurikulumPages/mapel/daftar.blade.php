@extends('kurikulumPages.kurikulum')
@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('daftar-mapel.add') }}" class="btn btn-primary" type="button">
                Tambah Data Mapel
            </a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-danger font-semibold" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Daftar Mata Pelajaran
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Guru</th>
                                    <th>Mapel</th>
                                    <th>Icon</th>
                                    <th>Video Kode</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mapel as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->mapel }}</td>
                                        <td>
                                            <img src="{{ asset('assets/img/mapel/' . $item->icon) }}" width="20px" alt="">
                                        </td>
                                        <td>{{ $item->video }}</td>
                                        <td>
                                            <a href="{{ route('daftar-mapel.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm btn-icon">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                                href="{{ route('daftar-mapel.delete', $item->id) }}"
                                                class="btn btn-danger btn-sm btn-icon">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
