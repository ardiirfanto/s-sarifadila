@extends('kurikulumPages.kurikulum')
@section('content')
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
                        Daftar Siswa
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $item)
                                    <tr>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>
                                            @if ($item->is_valid == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('daftar-siswa.validate', $item->id) }}"
                                                class="btn {{ $item->is_valid == 1 ? 'btn-danger' : 'btn-success' }} btn-sm btn-icon">
                                                @if ($item->is_valid == 1)
                                                    <i class="bi bi-x"></i>
                                                @else
                                                    <i class="bi bi-check"></i>
                                                @endif
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
