@extends('category.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="d-flex justify-content-between align-items-center">
                        Buat list Tugas Baru
                        <a href="{{ url('category') }}" class="btn btn-danger">Kembali</a>
                    </h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Tugas " />
                            @error('name') 
                            <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Jenis Tugas dan Tenggat</label>
                            <textarea name="description" id="description" rows="4" class="form-control" placeholder="Masukkan data disini"></textarea>
                            @error('description') 
                            <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <div class="form-check">
                                <input type="checkbox" name="status" id="status" class="form-check-input" checked>
                                <label for="status" class="form-check-label">Selesai</label>
                            </div>
                            @error('status') 
                            <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
