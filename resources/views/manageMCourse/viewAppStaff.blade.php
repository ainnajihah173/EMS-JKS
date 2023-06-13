@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Kemaskini Maklumat Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Peserta</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div id="daftarKursus" class="tabcontent">

                            <div class="container mt-2">
                                <div class="left">
                                    <span>Tarikh Permohonan </span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                            <div class="container mt-2">
                                <div class="left">
                                    <span>No. Kad Pengenalan</span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                            <div class="container mt-2">
                                <div class="left">
                                    <span>Nama</span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                            <div class="container mt-2">
                                <div class="left">
                                    <span>Anjuran</span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                            
                            <div class="container mt-2">
                                <div class="left">
                                    <span>Lokasi & Alamat *</span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                        
                            <div class="container mt-2">
                                <div class="left">
                                    <span>Tarikh Kursus *</span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                    
                            <div class="container mt-2">
                                <div class="left">
                                    <span>Masa Kursus</span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                            <div class="container mt-2">
                                <div class="left">
                                    <span>Kehadiran Kursus</span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                            <div class="container mt-2">
                                <div class="left">
                                    <span>Kelulusan Kursus</span>
                                </div>
                                <div class="right">
                                    <span>ssssssssssssss</span>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    <a href="{{ route('manageMCourse.indexStaff') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                        Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
