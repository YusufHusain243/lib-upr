@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Agenda</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Agenda</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Agenda</h3>
                    </div>
                    <form action="/kelola-agenda/{{$data->id}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul Agenda</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{$data->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Posting</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$data->tanggal}}">
                            </div>
                            <div class="form-group">
                                <label for="agenda">Agenda</label>
                                <textarea id="agenda" name="agenda">
                                    {!!$data->isi!!}
                                </textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
            $('#agenda').summernote()
        })
    </script>
@endpush
