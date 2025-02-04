@extends('kurikulumPages.kurikulum')
@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('daftar-guru.add') }}" class="btn btn-primary" type="button">
                Tambah Data Guru
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
                        Daftar Guru
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>
                                            <a href="{{ route('daftar-guru.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm btn-icon">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="{{ route('daftar-guru.delete', $item->id) }}"
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
