@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Staf Perpustakaan</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Staf Perpustakaan</h3>
                            </div>
                            <div class="card-body">
                                @if (count($data) == 0)
                                    <form action="/kelola-staf" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="staf">Staf</label>
                                            <textarea id="staf" name="staf"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="staf_en">Staf (English)</label>
                                            <textarea id="staf_en" name="staf_en"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                @else
                                    <form action="/kelola-staf/{{ $data[0]->id }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="staf">Staf</label>
                                            <textarea id="staf" name="staf">
                                                {{ $data[0]->staf }}
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="staf_en">Staf (English)</label>
                                            <textarea id="staf_en" name="staf_en">
                                                {{ $data[0]->staf_en }}
                                            </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('summernote')
    <script>
        $(function() {
            $('#staf').summernote()
            $('#staf_en').summernote()
        })
    </script>
@endpush
