@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Kemaskini Maklumat Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Pemohon</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Nav Tab -->
                        <form role="form" method="POST" action={{ route('manageMRegistration.store') }}
                            enctype="multipart/form-data">
                            @csrf
                            <div class="nav-wrapper position-relative end-0">
                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#pemohon"
                                            role="tab" aria-controls="pemohon" aria-selected="true">
                                            Maklumat Pemohon
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#pasangan"
                                            role="tab" aria-controls="pasangan" aria-selected="false">
                                            Maklumat Pasangan
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#kahwin"
                                            role="tab" aria-controls="kahwin" aria-selected="false">
                                            Maklumat Perkahwinan
                                        </a>
                                </ul>
                                <div class="card-header pb-0 text-center">
                                    <p class="fw-bold font-italic">** Sila Pastikan Maklumat Diisi dengan Maklumat Yang
                                        Betul **
                                    </p>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="pemohon" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <input type="hidden" name="mreg_category" value="{{ $selectedCategory }}">
                                        <input type="hidden" name="applicant_id" value="{{ $data->applicant->id ?? '' }}">
                                        <input type="hidden" name="spouse_id" value="{{ $data->spouse->id ?? ''}}">
                                        <input type="hidden" name="wali_id" value="{{ $data->wali->id ?? ''}}">
                                        <input type="hidden" name="witness_id" value="{{ $data->witness->id ?? ''}}">
                                        <div class="row mt-3">
                                            <input type="hidden" value="{{ $data}}" name="mreg_category">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pemohon <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="applicant[app_name]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Kad Pengenalan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_ic]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Lahir <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date"
                                                        name="applicant[app_birthdate]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_age]" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Warganegara <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_nationality]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->applicant->app_nationality == '1') ? 'selected' : '' }}>
                                                            Warganegara</option>
                                                        <option value="2"
                                                            {{ ($data && $data->applicant->app_nationality == '2') ? 'selected' : '' }}>
                                                            Bukan Warganegara</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Taraf Pendidikan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_education]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->applicant->app_education == 1) ? 'selected' : '' }}>
                                                            Tiada Pendidikan</option>
                                                        <option value="2"
                                                            {{ ($data && $data->applicant->app_education == 2) ? 'selected' : '' }}>
                                                            SPM
                                                        </option>
                                                        <option value="3"
                                                            {{ ($data && $data->applicant->app_education == 3) ? 'selected' : '' }}>
                                                            Diploma</option>
                                                        <option value="4"
                                                            {{ ($data && $data->applicant->app_education == 4) ? 'selected' : '' }}>
                                                            Ijazah Sarjana</option>
                                                        <option value="5"
                                                            {{ ($data && $data->applicant->app_education == 5) ? 'selected' : '' }}>
                                                            PHD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Bangsa <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_nation]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->applicant->app_nation == 1) ? 'selected' : '' }}>
                                                            Melayu</option>
                                                        <option value="2"
                                                            {{ ($data && $data->applicant->app_nation == 2) ? 'selected' : '' }}>Cina
                                                        </option>
                                                        <option value="3"
                                                            {{ ($data && $data->applicant->app_nation == 3) ? 'selected' : '' }}>India
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Status Sebelum Berkahwin <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_marriageStatus]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->applicant->app_marriageStatus == 1) ? 'selected' : '' }}>
                                                            Dara</option>
                                                        <option value="2"
                                                            {{ ($data && $data->applicant->app_marriageStatus == 2) ? 'selected' : '' }}>
                                                            Teruna</option>
                                                        <option value="3"
                                                            {{ ($data && $data->applicant->app_marriageStatus == 3) ? 'selected' : '' }}>
                                                            Duda</option>
                                                        <option value="4"
                                                            {{ ($data && $data->applicant->app_marriageStatus == 4) ? 'selected' : '' }}>
                                                            Janda</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Dalam K/P <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="applicant[app_houseaddress]" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Terkini <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="applicant[app_addressLatest]" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Sektor Pekerjaan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_jobSector]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->applicant->app_jobSector == 1) ? 'selected' : '' }}>
                                                            Kerajaan</option>
                                                        <option value="2"
                                                            {{ ($data && $data->applicant->app_jobSector == 2) ? 'selected' : '' }}>
                                                            Swasta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pekerjaan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_jobName]"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Pendapatan (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        name="applicant[app_jobSalary]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Telefon <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_phoneNumber]"
                                                        type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button onclick="history.back()"
                                                class="btn btn-light btn-md ms-auto">Kembali</button>
                                            <a href="" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pasangan" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pasangan <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="spouse[app_name]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Kad Pengenalan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_ic]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Lahir <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date"
                                                        name="spouse[app_birthdate]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_age]" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Warganegara <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_nationality]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1">Warganegara</option>
                                                        <option value="2">Bukan Warganegara</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Taraf Pendidikan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_education]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->spouse->app_education == 1) ? 'selected' : '' }}>
                                                            Tiada Pendidikan</option>
                                                        <option value="2"
                                                            {{ ($data && $data->spouse->app_education == 2) ? 'selected' : '' }}>
                                                            SPM
                                                        </option>
                                                        <option value="3"
                                                            {{ ($data && $data->spouse->app_education == 3) ? 'selected' : '' }}>
                                                            Diploma</option>
                                                        <option value="4"
                                                            {{ ($data && $data->spouse->app_education == 4) ? 'selected' : '' }}>
                                                            Ijazah Sarjana</option>
                                                        <option value="5"
                                                            {{ ($data && $data->spouse->app_education == 5) ? 'selected' : '' }}>
                                                            PHD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Bangsa <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_nation]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->spouse->app_nation == 1) ? 'selected' : '' }}>
                                                            Melayu</option>
                                                        <option value="2"
                                                            {{ ($data && $data->spouse->app_nation == 2) ? 'selected' : '' }}>Cina
                                                        </option>
                                                        <option value="3"
                                                            {{ ($data && $data->spouse->app_nation == 3) ? 'selected' : '' }}>India
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Status Sebelum Berkahwin <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_marriageStatus]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->spouse->app_marriageStatus == 1) ? 'selected' : '' }}>
                                                            Dara</option>
                                                        <option value="2"
                                                            {{ ($data && $data->spouse->app_marriageStatus == 2) ? 'selected' : '' }}>
                                                            Teruna</option>
                                                        <option value="3"
                                                            {{ ($data && $data->spouse->app_marriageStatus == 3) ? 'selected' : '' }}>
                                                            Duda</option>
                                                        <option value="4"
                                                            {{ ($data && $data->spouse->app_marriageStatus == 4) ? 'selected' : '' }}>
                                                            Janda</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Dalam K/P <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="spouse[app_houseaddress]" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Terkini <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="spouse[app_addressLatest]" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Sektor Pekerjaan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_jobSector]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->spouse->app_jobSector == 1) ? 'selected' : '' }}>
                                                            Kerajaan</option>
                                                        <option value="2"
                                                            {{ ($data && $data->spouse->app_jobSector == 2) ? 'selected' : '' }}>
                                                            Swasta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pekerjaan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_jobName]"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Pendapatan (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        name="spouse[app_jobSalary]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Telefon <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_phoneNumber]"
                                                        type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <a href="#" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kahwin" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-12 bg-light p-1 mb-2">
                                                <h6>Butiran Perkahwinan</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Mohon <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="mreg_dateApply"
                                                        readonly id="dateInput">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mreg_marriageDate" type="date"
                                                        value="{{ $data->mreg_marriageDate ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tempat Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        name="mreg_marriageAddress"
                                                        value="{{ $data->mreg_marriageAddress ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Masa Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mreg_marriageTime" type="time"
                                                        value="{{ $data->mreg_marriageTime ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Mas Kahwin (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="number" name="mreg_masKahwin"
                                                        value="{{ $data->mreg_masKahwin ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Hantaran (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mreg_hantaran" type="number"
                                                        value="{{ $data->mreg_hantaran ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Jurunikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="mreg_jurunikahName"
                                                        value="{{ $data->mreg_jurunikahName ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Muatnaik Bayaran Nikah Resit <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" name="mreg_resit" type="file">
                                                </div>
                                            </div>
                                            <div class="col-md-12 bg-light p-1 mb-2 mt-2">
                                                <h6>Butiran Wali</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="wali[wali_name]"
                                                        value="{{ $data->wali->wali_name ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_ic]" type="text"
                                                        value="{{ $data->wali->wali_ic ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Wali <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="wali[wali_address]" rows="2">{{ $data->wali->wali_address ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Hubungan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="wali[wali_relationship]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->wali->wali_relationship == 1) ? 'selected' : '' }}>
                                                            Bapa</option>
                                                        <option value="2"
                                                            {{ ($data && $data->wali->wali_relationship == 2) ? 'selected' : '' }}>
                                                            Abang</option>
                                                        <option value="3"
                                                            {{ ($data && $data->wali->wali_relationship == 3) ? 'selected' : '' }}>
                                                            Adik</option>
                                                        <option value="4"
                                                            {{ ($data && $data->wali->wali_relationship == 4) ? 'selected' : '' }}>
                                                            Atuk</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Lahir Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_birthdate]"
                                                        value="{{ $data->wali->wali_birthdate ?? '' }}" type="date">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_age]" type="number"
                                                        value="{{ $data->wali->wali_age ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_phoneNum]"
                                                        value="{{ $data->wali->wali_phoneNum ?? '' }}" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-12 bg-light p-1 mb-2 mt-2">
                                                <h6>Maklumat Saksi</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_name1]" type="text"
                                                        value="{{ $data->witness->wit_name1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_icNum1]" type="text"
                                                        value="{{ $data->witness->wit_icNum1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Saksi 1 <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="witness[wit_adress1]" rows="2">{{ $data->witness->wit_address1 ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_age1]" type="number"
                                                        value="{{ $data->witness->wit_age1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_noPhone1]"
                                                        type="text" value="{{ $data->witness->wit_noPhone1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_name2]" type="text"
                                                        value="{{ $data->witness->wit_name2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_icNum2]" type="text"
                                                        value="{{ $data->witness->wit_icNum2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Saksi 2 <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="witness[wit_adress2]" rows="2">{{ $data->witness->wit_address2 ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_age2]" type="number"
                                                        value="{{ $data->witness->wit_age2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_noPhone2]"
                                                        type="text" value="{{ $data->witness->wit_noPhone2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-info btn-md ms-4">Hantar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kahwin" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-12 bg-light p-1 mb-2">
                                                <h6>Butiran Perkahwinan</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Mohon <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date" name="mreg_dateApply"
                                                        id="dateApply" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mreg_marriageDate" type="date">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tempat Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        name="mreg_marriageAddress">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Masa Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mreg_marriageTime" type="time">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Mas Kahwin (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="number" name="mreg_masKahwin">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Hantaran (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mreg_hantaran" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Jurunikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="mreg_jurunikahName">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Muatnaik Bayaran Nikah Resit <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" name="mreg_resit" type="file">
                                                </div>
                                            </div>
                                            <div class="col-md-12 bg-light p-1 mb-2 mt-2">
                                                <h6>Butiran Wali</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="wali[wali_name]"  value="{{ $data->wali->wali_name ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_ic]" type="text" value="{{ $data->wali->wali_ic ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Wali <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="wali[wali_address]" rows="2">{{ $data->wali->wali_address ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Hubungan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="wali[wali_relationship]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ ($data && $data->wali->wali_relationship == 1) ? 'selected' : '' }}>
                                                            Bapa</option>
                                                        <option value="2"
                                                            {{ ($data && $data->wali->wali_relationship == 2) ? 'selected' : '' }}>
                                                            Abang</option>
                                                        <option value="3"
                                                            {{ ($data && $data->wali->wali_relationship == 3) ? 'selected' : '' }}>
                                                            Adik</option>
                                                        <option value="4"
                                                            {{ ($data && $data->wali->wali_relationship == 4) ? 'selected' : '' }}>
                                                            Atuk</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Lahir Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_birthdate]"
                                                        type="date" value="{{ $data->wali->wali_birthdate ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_age]" type="number" value="{{ $data->wali->wali_age ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_phoneNum]"
                                                        type="number" value="{{ $data->wali->wali_phoneNum ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 bg-light p-1 mb-2 mt-2">
                                                <h6>Maklumat Saksi</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_name1]" type="text" value="{{ $data->witness->wit_name1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_icNum1]"
                                                        type="text"  value="{{ $data->witness->wit_icNum1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Saksi 1 <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="witness[wit_adress1]" rows="2">{{ $data->witness->wit_address1 ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_age1]" type="number"  value="{{ $data->witness->wit_age1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_noPhone1]"
                                                        type="text"  value="{{ $data->witness->wit_noPhone1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_name2]" type="text"  value="{{ $data->witness->wit_name2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_icNum2]"
                                                        type="text" value="{{ $data->witness->wit_icNum2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Saksi 2 <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="witness[wit_adress2]" rows="2">{{ $data->witness->wit_address2 ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_age2]" type="number" value="{{ $data->witness->wit_age2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_noPhone2]"
                                                        type="text" value="{{ $data->witness->wit_noPhone2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <a href="" class="btn btn-light btn-md ms-4">Kembali</a>
                                                <button type="submit" class="btn btn-info btn-md ms-4">Draft</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script>
        let field = document.querySelector('#dateApply');
        field.valueAsDate = new Date();
    </script>
@endpush
