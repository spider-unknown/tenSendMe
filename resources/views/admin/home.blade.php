@extends('admin.layouts.admin')
@section('content')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Главное</span>
            <h3 class="page-title">Доска</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Посты</span>
                            <h6 class="stats-small__value count my-3">2,390</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Страницы</span>
                            <h6 class="stats-small__value count my-3">182</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Комменты</span>
                            <h6 class="stats-small__value count my-3">8,147</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--decrease">3.8%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Users</span>
                            <h6 class="stats-small__value count my-3">2,413</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
