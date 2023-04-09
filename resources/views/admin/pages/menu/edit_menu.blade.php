@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Menu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Menu</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Menu</h3>
                    </div>
                    <form action="/kelola-menu/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Menu</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_en">Nama Menu (English)</label>
                                <input type="text" class="form-control" id="nama_en" name="nama_en" value="{{$data->nama_en}}">
                            </div>
                            <div class="form-group">
                                <label for="url">URL Menu</label>
                                <input type="text" class="form-control" id="url" name="url" value="{{$data->url}}">
                            </div>
                            <div class="form-group">
                                <label for="logo_menu">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="logo_menu" name="logo_menu" value="{{$data->logo}}">
                                        <label class="custom-file-label" for="logo_menu">Choose file</label>
                                    </div>
                                </div>
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
