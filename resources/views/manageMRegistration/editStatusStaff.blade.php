@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Pendaftaran Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Kemaskini Status</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                              <label>Nama Pemohon</label>
                            </div>
                            <div class="col-2">
                              <p>: Ali Bin Abu</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                              <label>No. K/P Pemohon</label>
                            </div>
                            <div class="col-2">
                              <p>: 981234050981</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                              <label>Nama Pasangan</label>
                            </div>
                            <div class="col-2">
                              <p>: Zubaidah Binti Awang</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                              <label>No. K/P Pasangan</label>
                            </div>
                            <div class="col-2">
                              <p>: 981234050984</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                              <label>No. Akaun Terima</label>
                            </div>
                            <div class="col-2">
                              <p>: KTN12233443433433</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                              <label>Tarikh Mohon</label>
                            </div>
                            <div class="col-2">
                              <p>: 12/12/2022</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1 mb-3">
                            <div class="col-2">
                              <label>Status Permohonan</label>
                            </div>
                            <div class="col-6">
                                <select class="form-select" aria-label="Default select example" style="width:50%;">
                                    <option selected>--- Sila Pilih ---</option>
                                    <option value="1">Terima</option>
                                    <option value="2">Tolak</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                              <label>Tarikh Terima</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control" name="date" type="date">
                            </div>
                        </div>
 
                        <div class="text-center mt-5">
                            <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                            <a href="" class="btn btn-info btn-md ms-4">Hantar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

