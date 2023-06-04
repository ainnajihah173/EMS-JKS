@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Pendaftaran Perkahwinan'])
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
                                    <label for="example-text-input" class="form-control-label">Name <span
                                            class="text-danger">*</span></label>
                                    <p>Ali bin Abu</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email <span
                                            class="text-danger">*</span></label>
                                    <p>Try Try</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                            <button onclick="" class="btn btn-info btn-md ms-auto">Seterusnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

