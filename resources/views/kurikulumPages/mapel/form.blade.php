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
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($mapel !== null)
                            <input type="text" name="id" value="{{ $mapel->id }}" hidden>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Guru Pengampu</label>
                                    <select name="guru" id="guru" class="form-control">
                                        <option value="">Pilih Guru</option>
                                        @foreach ($guru as $item)
                                            <option {{ $mapel != null && $mapel->user_id == $item->id ? 'SELECTED' : '' }}
                                                value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Mapel</label>
                                    <input value="{{ $mapel->mapel ?? '' }}" type="text" name="mapel"
                                        class="form-control" id="mapel" placeholder="Masukkan Mata Pelajaran">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Icon</label>
                                    <input accept="image/*" type="file" name="icon" class="form-control"
                                        id="icon">
                                    @if ($mapel !== null)
                                        <p class="mx-0 text-muted">*Abaikan jika tidak ingin merubah icon</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="username">Kode Video Youtube</label>
                                    <input value="{{ $mapel->video ?? '' }}" type="text" name="video"
                                        class="form-control" id="video" placeholder="Masukkan Kode Video">
                                    <p class="mx-0 text-xs">Contoh : https://www.youtube.com/watch?v=<b
                                            class="text-danger">jKtbnLoYJe8</b></p>
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
