@extends('category.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-primary text-white">
                    <h4 class="d-inline-block">Detail Tugas</h4>
                    <a href="{{ url('category') }}" class="btn btn-danger float-end">Kembali</a>
                </div>
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h5 class="text-muted">Nama Tugas:</h5>
                        <h3 class="text-dark">{{ $category->name }}</h3>
                    </div>
                    <hr>
                    <div class="mb-4">
                        <h5 class="text-muted">Deskripsi:</h5>
                        <p class="text-dark">
                            {!! $category->description !!}
                        </p>
                    </div>
                    <hr>
                    <div class="mb-4">
                        <h5 class="text-muted">Status:</h5>
                        <p class="badge {{ $category->status == 1 ? 'bg-success' : 'bg-warning' }}">
                            {{ $category->status == 1 ? 'Selesai' : 'Belum Selesai' }}
                        </p>
                    </div>
                </div>
                <div class="card-footer bg-light text-center">
                    <a href="{{ url('category') }}" class="btn btn-secondary">Kembali ke Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
