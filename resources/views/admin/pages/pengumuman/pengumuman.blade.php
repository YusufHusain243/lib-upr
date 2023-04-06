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
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Judul Pengumuman</label>
                                <input type="text" class="form-control" id="title"
                                    placeholder="Masukkan Judul Pengumuman">
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal Posting</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="pengumuman">Pengumuman</label>
                                <textarea id="pengumuman">
                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                </textarea>
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
                                            <th>Tanggal Posting</th>
                                            <th>Isi Pengumuman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pengumuman 1</td>
                                            <td>20/20/2001</td>
                                            <td>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptates
                                                quibusdam tempore facere vitae molestias quia voluptatem eveniet quae vel
                                                ipsum perspiciatis corporis quisquam quo, blanditiis officia repellendus
                                                laboriosam sunt!
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/edit-pengumuman" type="button" class="btn btn-warning">Edit</a>
                                                    <a href="/delete-pengumuman" type="button"
                                                        onclick="return confirm('Are you sure you want to delete this item?');"
                                                        class="btn btn-danger">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
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
        })
    </script>
@endpush
