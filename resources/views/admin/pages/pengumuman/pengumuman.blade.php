@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kelola Pengumuman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kelola Pengumuman</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Pengumuman</h3>
                    </div>
                    <form action="/kelola-pengumuman" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul Pengumuman</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Masukkan Judul Pengumuman">
                            </div>
                            <div class="form-group">
                                <label for="judul_en">Judul Pengumuman (English)</label>
                                <input type="text" class="form-control" id="judul_en" name="judul_en"
                                    placeholder="Masukkan Judul Pengumuman (English)">
                            </div>
                            <div class="form-group">
                                <label for="pengumuman">Pengumuman</label>
                                <textarea id="pengumuman" name="pengumuman"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pengumuman_en">Pengumuman (English)</label>
                                <textarea id="pengumuman_en" name="pengumuman_en"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Posting</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
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
                                <h3 class="card-title">Daftar Pengumuman</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul Pengumuman</th>
                                            <th>Judul Pengumuman (English)</th>
                                            <th>Isi Pengumuman</th>
                                            <th>Isi Pengumuman (English)</th>
                                            <th>Tanggal Posting</th>
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
                                                    <div class="btn-group">
                                                        <div>
                                                            <a href="/kelola-pengumuman/{{ $d->id }}" type="button"
                                                                class="btn btn-warning">Edit</a>
                                                        </div>
                                                        <form action="/kelola-pengumuman/{{ $d->id }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                onclick="return confirm('Yakin Hapus Pengumuman Ini?');"
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
            $('#pengumuman').summernote()
            $('#pengumuman_en').summernote()
        })
    </script>
@endpush
