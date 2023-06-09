@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kelola Berita</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kelola Berita</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Berita</h3>
                    </div>
                    <form action="/kelola-berita" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul Berita</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Masukkan Judul Berita">
                            </div>
                            <div class="form-group">
                                <label for="judul_en">Judul Berita (English)</label>
                                <input type="text" class="form-control" id="judul_en" name="judul_en"
                                    placeholder="Masukkan Judul Berita (English)">
                            </div>
                            <div class="form-group">
                                <label for="berita">Berita</label>
                                <textarea id="berita" name="berita"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="berita_en">Berita (English)</label>
                                <textarea id="berita_en" name="berita_en"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Posting</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="form-group">
                                <label for="foto">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Berita</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul Berita</th>
                                            <th>Judul Berita (English)</th>
                                            <th>Isi Berita</th>
                                            <th>Isi Berita (English)</th>
                                            <th>Tanggal Posting</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->judul }}</td>
                                                <td>{{ $d->judul_en }}</td>
                                                <td>{!! $d->isi !!}</td>
                                                <td>{!! $d->isi_en !!}</td>
                                                <td>{{ $d->tanggal }}</td>
                                                <td>
                                                    <img src="/storage/images/{{$d->foto}}" width="100px">
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <div>
                                                            <a href="/kelola-berita/{{ $d->id }}" type="button"
                                                                class="btn btn-warning">Edit</a>
                                                        </div>
                                                        <form action="/kelola-berita/{{ $d->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                onclick="return confirm('Yakin Hapus Berita Ini?');"
                                                                class="btn btn-danger">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </div>
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
        </section>
    </div>
@endsection

@push('datatables')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush

@push('summernote')
    <script>
        $(function() {
            $('#berita').summernote()
            $('#berita_en').summernote()
        })
    </script>
@endpush
