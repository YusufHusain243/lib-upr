@extends('admin/main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner mb-4">
                                <h4>Dashboard</h4>
                            </div>
                            <a href="/dashboard" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner mb-4">
                                <h4>Kelola Menu</h4>
                            </div>
                            <a href="/kelola-menu" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner mb-4">
                                <h4>Kelola Pengumuman</h4>
                            </div>
                            <a href="/kelola-pengumuman" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner mb-4">
                                <h4>Kelola Berita</h4>
                            </div>
                            <a href="/kelola-berita" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner mb-4">
                                <h4>Kelola Agenda</h4>
                            </div>
                            <a href="/kelola-agenda" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner mb-4">
                                <h4>Kelola Galeri</h4>
                            </div>
                            <a href="/kelola-galeri" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner mb-4">
                                <h4>Kelola Sejarah</h4>
                            </div>
                            <a href="/kelola-sejarah" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner mb-4">
                                <h4>Kelola Tim Manajemen</h4>
                            </div>
                            <a href="/kelola-tim-manajemen" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner mb-4">
                                <h4>Kelola Staf Perpustakaan</h4>
                            </div>
                            <a href="/kelola-staf" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner mb-4">
                                <h4>Kelola Jejaring</h4>
                            </div>
                            <a href="/kelola-jejaring" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner mb-4">
                                <h4>Kelola FAQ</h4>
                            </div>
                            <a href="/kelola-faq" class="small-box-footer">
                                Go 
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
