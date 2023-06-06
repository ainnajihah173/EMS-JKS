@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Maklumat Permohonan Kad Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Permohonan</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Maklumat Pemohon-->
                        <div class="row justify-content-start m-1 mt-3">
                            <div class="col-2">
                                <label>Nama Suami</label>
                            </div>
                            <div class="col-4">
                                <p>: Ali Bin Abu</p>
                            </div>
                            <div class="col-2">
                                <label>No. Pendaftaran</label>
                            </div>
                            <div class="col-4">
                                <p>: KTN12343243</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Suami</label>
                            </div>
                            <div class="col-4">
                                <p>: 98342424512</p>
                            </div>
                            <div class="col-2">
                                <label>Gambar Passport Suami</label>
                            </div>
                            <div class="col-4">
                                <p>: (link)</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Isteri</label>
                            </div>
                            <div class="col-4">
                                <p>: Zubaidah Binti Awang</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Isteri</label>
                            </div>
                            <div class="col-4">
                                <p>: 98432432435212</p>
                            </div>
                            <div class="col-2">
                                <label>Gambar Passport Isteri</label>
                            </div>
                            <div class="col-4">
                                <p>: (link)</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Akad Nikah</label>
                            </div>
                            <div class="col-4">
                                <p>: 12/12/2022</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Mohon Kad</label>
                            </div>
                            <div class="col-4">
                                <p>: 01/01/2023</p>
                            </div>
                            <div class="col-2">
                                <label>Resit Bayaran</label>
                            </div>
                            <div class="col-4">
                                <p>: (link)</p>
                            </div>

                        </div>
                        <div class="text-center mt-4">
                            <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
