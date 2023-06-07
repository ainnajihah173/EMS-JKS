@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Kemaskini Maklumat Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Pemohon</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Nav Tab -->
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#suami"
                                        role="tab" aria-controls="suami" aria-selected="true">
                                        Maklumat Pemohon
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#isteri" role="tab"
                                        aria-controls="isteri" aria-selected="false">
                                        Maklumat Pasangan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#kahwin" role="tab"
                                        aria-controls="kahwin" aria-selected="false">
                                        Maklumat Perkahwinan
                                    </a>
                                </li>
                            </ul>
                            <div class="card-header pb-0 text-center">
                                <p class="fw-bold font-italic">** Sila Pastikan Maklumat Diisi dengan Maklumat Yang Betul **
                                </p>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="suami" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Pemohon <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="husName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    No. Kad Pengenalan <span class="text-danger">*</span></label>
                                                <input class="form-control" name="kpHus" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Tarikh Lahir <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="husName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Umur <span class="text-danger">*</span></label>
                                                <input class="form-control" name="ageHus" type="number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Warganegara <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">Warganegara</option>
                                                    <option value="2">Bukan Warganegara</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Taraf Pendidikan <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">Tiada Pendidikan</option>
                                                    <option value="2"></option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Bangsa <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Status Sebelum Berkahwin <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Alamat Dalam K/P <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="alamatKPHus" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label font-italic" for="exampleCheck1">Tanda Jika
                                                    Alamat Terkini Sama Dengan Alamat Dalam K/P</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Alamat Terkini <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="alamatTerkiniHus" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Sektor Pekerjaan <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Pekerjaan <span class="text-danger">*</span></label>
                                                <input class="form-control" name="namaKerjaHus" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Pendapatan (RM) <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="gajiHus" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    No. Telefon <span class="text-danger">*</span></label>
                                                <input class="form-control" name="telHus" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button onclick="history.back()"
                                            class="btn btn-light btn-md ms-auto">Kembali</button>
                                        <a href="" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="isteri" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Pasangan <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="wifeName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    No. Kad Pengenalan <span class="text-danger">*</span></label>
                                                <input class="form-control" name="kpWife" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Tarikh Lahir <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="wifeName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Umur <span class="text-danger">*</span></label>
                                                <input class="form-control" name="ageWife" type="number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Warganegara <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">Warganegara</option>
                                                    <option value="2">Bukan Warganegara</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Taraf Pendidikan <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">Tiada Pendidikan</option>
                                                    <option value="2"></option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Bangsa <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Status Sebelum Berkahwin <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Alamat Dalam K/P <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="alamatKPWife" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label font-italic" for="exampleCheck1">Tanda Jika
                                                    Alamat Terkini Sama Dengan Alamat Dalam K/P</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Alamat Terkini <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="alamatTerkiniWife" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Sektor Pekerjaan <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Pekerjaan <span class="text-danger">*</span></label>
                                                <input class="form-control" name="namaKerjaWife" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Pendapatan (RM) <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="gajiWife" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    No. Telefon <span class="text-danger">*</span></label>
                                                <input class="form-control" name="telWife" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <a href="" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kahwin" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row mt-3">
                                        <div class="col-md-12 bg-light p-1 mb-2">
                                            <h6>Butiran Perkahwinan</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Tarikh Mohon <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="tarikhMohon" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Suami <span class="text-danger">*</span></label>
                                                <input class="form-control" name="nameHus" type="text" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Isteri <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="tarikhMohon" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Tarikh Akad Nikah <span class="text-danger">*</span></label>
                                                <input class="form-control" name="tarikhAkad" type="date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Tempat Akad Nikah <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="tempatAkad" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Masa Akad Nikah <span class="text-danger">*</span></label>
                                                <input class="form-control" name="nameHus" type="time">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Mas Kahwin (RM) <span class="text-danger">*</span></label>
                                                <input class="form-control" type="number" name="masKahwin" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Hantaran (RM) <span class="text-danger">*</span></label>
                                                <input class="form-control" name="hantaran" type="number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Jurunikah <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="jurunikahName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Muatnaik Bayaran Nikah Resit <span class="text-danger">*</span></label>
                                                <input class="form-control" name="nikahResit" type="file">
                                            </div>
                                        </div>
                                        <div class="col-md-12 bg-light p-1 mb-2 mt-2">
                                            <h6>Butiran Wali</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Wali <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="waliName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    No. K/P Wali <span class="text-danger">*</span></label>
                                                <input class="form-control" name="noKPWali" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Alamat Wali <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="alamatWali" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Hubungan <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Tarikh Lahir Wali <span class="text-danger">*</span></label>
                                                <input class="form-control" name="dateWali" type="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Umur Wali <span class="text-danger">*</span></label>
                                                <input class="form-control" name="umurWali" type="number">
                                            </div>
                                        </div>
                                        <div class="col-md-12 bg-light p-1 mb-2 mt-2">
                                            <h6>Maklumat Saksi</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Saksi 1 <span class="text-danger">*</span></label>
                                                <input class="form-control" name="namaSaksi1" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    No. K/P Saksi 1 <span class="text-danger">*</span></label>
                                                <input class="form-control" name="noKPSaksi1" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Alamat Saksi 1 <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="alamatSaksi1" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Umur Saksi 1 <span class="text-danger">*</span></label>
                                                <input class="form-control" name="umurSaksi1" type="number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Nama Saksi 2 <span class="text-danger">*</span></label>
                                                <input class="form-control" name="namaSaksi2" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    No. K/P Saksi 2 <span class="text-danger">*</span></label>
                                                <input class="form-control" name="noKPSaksi2" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Alamat Saksi 2 <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="alamatSaksi2" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Umur Saksi 2 <span class="text-danger">*</span></label>
                                                <input class="form-control" name="umurSaksi2" type="number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">
                                                    Lafaz Ta'liq <span class="text-danger">*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sila Pilih...</option>
                                                    <option value="1">Ada</option>
                                                    <option value="2">Tiada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <a href="" class="btn btn-light btn-md ms-4">Kembali</a>
                                            <a href="" class="btn btn-secondary btn-md ms-4">Draft</a>
                                            <a href="" class="btn btn-info btn-md ms-4">Hantar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script></script>
@endpush
