@extends('kurikulumPages.kurikulum')

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-danger font-semibold" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $title }}</div>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @if ($guru !== null)
                            <input type="text" name="id" value="{{ $guru->id }}" hidden>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input value="{{ $guru->name ?? "" }}" type="text" name="name" class="form-control" id="name"
                                        placeholder="Masukkan Nama">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input value="{{ $guru->email ?? "" }}" type="email" name="email" class="form-control" id="email"
                                        placeholder="Masukkan Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input value="{{ $guru->username ?? "" }}" type="text" name="username" class="form-control" id="username"
                                        placeholder="Masukkan Username">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Masukkan Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
