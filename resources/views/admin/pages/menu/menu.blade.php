@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kelola Menu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kelola Menu</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Menu</h3>
                    </div>
                    <form method="POST" action="/kelola-menu" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Menu</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan Nama Menu">
                            </div>
                            <div class="form-group">
                                <label for="nama_en">Nama Menu (English)</label>
                                <input type="text" class="form-control" id="nama_en" name="nama_en"
                                    placeholder="Masukkan Nama Menu (English)">
                            </div>
                            <div class="form-group">
                                <label for="url">URL Menu</label>
                                <input type="text" class="form-control" id="url" name="url"
                                    placeholder="Masukkan URL Menu">
                            </div>
                            <div class="form-group">
                                <label for="logo_menu">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="logo_menu" name="logo_menu">
                                        <label class="custom-file-label" for="logo_menu">Choose file</label>
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
                                <h3 class="card-title">Daftar Menu</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Menu</th>
                                            <th>Nama Menu (English)</th>
                                            <th>URL</th>
                                            <th>Logo Menu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->nama }}</td>
                                                <td>{{ $d->nama_en }}</td>
                                                <td>
                                                    <a href="{{ $d->url }}">{{ $d->url }}</a>
                                                </td>
                                                <td>
                                                    <img src="storage/images/{{ $d->logo }}" width="50"
                                                        alt="" srcset="">
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <div>
                                                            <a href="/kelola-menu/{{$d->id}}" type="button"
                                                                class="btn btn-warning">Edit</a>
                                                        </div>
                                                        <form action="/kelola-menu/{{ $d->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                onclick="return confirm('Yakin Hapus Menu Ini?');"
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
