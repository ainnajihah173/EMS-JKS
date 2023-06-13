@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Pendaftaran Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Permohonan</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Maklumat Suami-->
                        <div class="row p-1 m-1 bg-light">
                            <div class="col">
                                <h6>Maklumat Suami</h6>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1 mt-3">
                            <div class="col-2">
                                <label>Nama Suami</label>
                            </div>
                            <div class="col-2">
                                <p>: Ali Bin Abu</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Suami</label>
                            </div>
                            <div class="col-2">
                                <p>: XX Tahun</p>
                            </div>
                            <div class="col-2">
                                <label>No. Kad Pengenalan</label>
                            </div>
                            <div class="col-2">
                                <p>: 981214050983</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat terkini</label>
                            </div>
                            <div class="col-2">
                                <p>: Lot 5, Kampung Beruas, 15200, Pekan, Pahang</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Dalam K/P</label>
                            </div>
                            <div class="col-2">
                                <p>: Lot 5, Kampung Beruas, 15200, Pekan, Pahang</p>
                            </div>
                             <div class="col-2">
                                <label>Tarikh Lahir</label>
                            </div>
                            <div class="col-2">
                                <p>: 14 December 1998</p>
                            </div>
                            <div class="col-2">
                                <label>Bangsa</label>
                            </div>
                            <div class="col-2">
                                <p>: Melayu</p>
                            </div>
                            <div class="col-2">
                                <label>Warganegara</label>
                            </div>
                            <div class="col-2">
                                <p>: Malaysia</p>
                            </div>
                            <div class="col-2">
                                <label>Status Sebelum Kahwin</label>
                            </div>
                            <div class="col-2">
                                <p>: Bujang</p>
                            </div>
                            <div class="col-2">
                                <label>Status Pekerjaan</label>
                            </div>
                            <div class="col-2">
                                <p>: Bekerja</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Pekerjaan</label>
                            </div>
                            <div class="col-2">
                                <p>: Guru</p>
                            </div>
                            <div class="col-2">
                                <label>Pendapatan</label>
                            </div>
                            <div class="col-2">
                                <p>: RM5000</p>
                            </div>
                            <div class="col-2">
                                <label>Taraf Pendidikan</label>
                            </div>
                            <div class="col-2">
                                <p>: Ijazah Sarjana Muda</p>
                            </div>
                            <div class="col-2">
                                <label>No. Telefon</label>
                            </div>
                            <div class="col-2">
                                <p>: 0123456789</p>
                            </div>
                        </div>
                        
                        <!-- Maklumat Isteri-->
                        <div class="row p-1 m-1 bg-light mt-4">
                            <div class="col">
                                <h6>Maklumat Isteri</h6>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1 mt-3">
                            <div class="col-2">
                                <label>Nama Isteri</label>
                            </div>
                            <div class="col-2">
                                <p>: Sumaiyyah</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Isteri</label>
                            </div>
                            <div class="col-2">
                                <p>: XX Tahun</p>
                            </div>
                            <div class="col-2">
                                <label>No. Kad Pengenalan</label>
                            </div>
                            <div class="col-2">
                                <p>: 981214050984</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat terkini</label>
                            </div>
                            <div class="col-2">
                                <p>: Lot 5, Kampung Beruas, 15200, Pekan, Pahang</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Dalam K/P</label>
                            </div>
                            <div class="col-2">
                                <p>: Lot 5, Kampung Beruas, 15200, Pekan, Pahang</p>
                            </div>
                             <div class="col-2">
                                <label>Tarikh Lahir</label>
                            </div>
                            <div class="col-2">
                                <p>: 14 December 1998</p>
                            </div>
                            <div class="col-2">
                                <label>Bangsa</label>
                            </div>
                            <div class="col-2">
                                <p>: Melayu</p>
                            </div>
                            <div class="col-2">
                                <label>Warganegara</label>
                            </div>
                            <div class="col-2">
                                <p>: Malaysia</p>
                            </div>
                            <div class="col-2">
                                <label>Status Sebelum Kahwin</label>
                            </div>
                            <div class="col-2">
                                <p>: Bujang</p>
                            </div>
                            <div class="col-2">
                                <label>Status Pekerjaan</label>
                            </div>
                            <div class="col-2">
                                <p>: Bekerja</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Pekerjaan</label>
                            </div>
                            <div class="col-2">
                                <p>: Guru</p>
                            </div>
                            <div class="col-2">
                                <label>Pendapatan</label>
                            </div>
                            <div class="col-2">
                                <p>: RM5000</p>
                            </div>
                            <div class="col-2">
                                <label>Taraf Pendidikan</label>
                            </div>
                            <div class="col-2">
                                <p>: Ijazah Sarjana Muda</p>
                            </div>
                            <div class="col-2">
                                <label>No. Telefon</label>
                            </div>
                            <div class="col-2">
                                <p>: 0123456789</p>
                            </div>
                        </div>
                        
                        <!-- Maklumat Perkahwinan-->
                        <div class="row p-1 m-1 bg-light mt-4">
                            <div class="col">
                                <h6>Maklumat Perkahwinan</h6>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1 mt-3">
                            <div class="col-2">
                                <label>Tarikh Permohonan</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Masa Akad Nikah</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Jurunikah</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Akad Nikah</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXX</p>
                            </div>
                             <div class="col-2">
                                <label>Hubungan Dengan Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Lahir Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXX</p>
                            </div>
                            
                            <div class="col-2">
                                <label>Umur Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXx</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXx</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Mas Kahwin</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Bayaran Nikah</label>
                            </div>
                            <div class="col-2">
                                <p>: (link)</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Tempat Akad Nikah</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Hantaran</label>
                            </div>
                            <div class="col-2">
                                <p>: XXXXXXXXXX</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: Lot 5, Kampung Beruas, 15200, Pekan, Pahang</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: Lot 5, Kampung Beruas, 15200, Pekan, Pahang</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: Lot 5, Kampung Beruas, 15200, Pekan, Pahang</p>
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
