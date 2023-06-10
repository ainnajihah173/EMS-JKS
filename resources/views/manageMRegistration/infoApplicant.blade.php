@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Pasangan</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>Nama Suami</label>
                            </div>
                            <div class="col-2">
                                <p>: Ali Bin Abu</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>No. K/P Suami</label>
                            </div>
                            <div class="col-2">
                                <p>: 981234050981</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>Nama Isteri</label>
                            </div>
                            <div class="col-2">
                                <p>: Zubaidah Binti Awang</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>No. K/P Isteri</label>
                            </div>
                            <div class="col-2">
                                <p>: 981234050984</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>Kategori Pendaftaran Nikah</label>
                            </div>
                            <div class="col-7">
                                <select class="form-select" aria-label="Default select example" style="width:50%;">
                                    <option selected>--- Sila Pilih ---</option>
                                    <option value="1">Pendaftaran Nikah Dengan Kebenaran</option>
                                    <option value="2">Pendaftaran Nikah Sukarela</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>No. Akaun Terima Kebenaran Berkahwin</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXXXXX</p>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                            <a href="{{ route('manageMRegistration.editAppApplication') }}"
                                class="btn btn-info btn-md ms-4">Seterusnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
