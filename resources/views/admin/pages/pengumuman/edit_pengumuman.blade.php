@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pengumuman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Pengumuman</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Pengumuman</h3>
                    </div>
                    <form action="/kelola-pengumuman/{{ $data->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul Pengumuman</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $data->judul }}">
                            </div>
                            <div class="form-group">
                                <label for="judul_en">Judul Pengumuman (English)</label>
                                <input type="text" class="form-control" id="judul_en" name="judul_en"
                                    value="{{ $data->judul_en }}">
                            </div>
                            <div class="form-group">
                                <label for="pengumuman">Pengumuman</label>
                                <textarea id="pengumuman" name="pengumuman">
                                    {!! $data->isi !!}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="pengumuman_en">Pengumuman (English)</label>
                                <textarea id="pengumuman_en" name="pengumuman_en">
                                    {!! $data->isi_en !!}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Posting</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="{{ $data->tanggal }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('summernote')
    <script>
        $(function() {
            $('#pengumuman').summernote()
            $('#pengumuman_en').summernote()
        })
    </script>
@endpush
