@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Kad Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Pasangan</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Suami</label>
                                    <input class="form-control" type="text" name="husName" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. K/P Suami</label>
                                    <input class="form-control" type="text" name="noKPHus" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Isteri</label>
                                    <input class="form-control" type="text" name="wifeName" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. K/P Isteri</label>
                                    <input class="form-control" type="text" name="noKPWife" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tarikh Akad Nikah</label>
                                    <input class="form-control" type="date" name="tarikhAkad" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Muatnaik Gambar Passport
                                        Suami</label>
                                    <input class="form-control" type="file" name="gambarHus" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Muatnaik Gambar Passport
                                        Ister</label>
                                    <input class="form-control" type="file" name="gambarWife" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Muatnaik Resit Kad
                                        Nikah</label>
                                    <input class="form-control" type="file" name="resitKad" readonly>
                                </div>
                            </div>

                        </div>

                        <div class="text-center mt-5">
                            <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                            <a href="" class="btn btn-secondary btn-md ms-4">Draft</a>
                            <a href="" class="btn btn-info btn-md ms-4">Hantar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
