@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">FAQ</h1>
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
                                <h3 class="card-title">Edit Isi FAQ</h3>
                            </div>
                            <div class="card-body">
                                @if (count($data) == 0)
                                    <form action="/kelola-faq" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="faq">FAQ</label>
                                            <textarea id="faq" name="faq"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="faq_en">FAQ (English)</label>
                                            <textarea id="faq_en" name="faq_en"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                @else
                                    <form action="/kelola-faq/{{ $data[0]->id }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="faq">FAQ</label>
                                            <textarea id="faq" name="faq">
                                                {{ $data[0]->faq }}
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="faq_en">FAQ (English)</label>
                                            <textarea id="faq_en" name="faq_en">
                                                {{ $data[0]->faq_en }}
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
            $('#faq').summernote()
            $('#faq_en').summernote()
        })
    </script>
@endpush
