
@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h1 class="h5 mb-0">Edit Buku</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Judul buku</label>
                            <input type="text" id="title" name="title"
                                   class="form-control @error('title') is-invalid @enderror"
                                   value="{{ old('title', $book->title) }}">

                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Penulis</label>
                            <input type="text" id="author" name="author"
                                   class="form-control @error('author') is-invalid @enderror"
                                   value="{{ old('author', $book->author) }}">

                            @error('author')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="published_year" class="form-label">Tahun terbit</label>
                            <input type="number" id="published_year" name="published_year"
                                   class="form-control @error('published_year') is-invalid @enderror"
                                   value="{{ old('published_year', $book->published_year) }}">

                            @error('published_year')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                Simpan Perubahan
                            </button>

                            <a href="{{ route('books.index') }}"
                               class="btn btn-outline-secondary">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
