@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="tab">
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.courseRegisteration' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.courseRegisteration') }}"><button class="tablinks"
                                    onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button></a>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.postponeCourse' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.postponeCourse') }}"><button class="tablinks"
                                    onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.courseRegisteration' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.courseRegisteration') }}"><button class="tablinks"
                                    onclick="activity(event, 'cetak')">Cetak</button></a>
                        </div>
                        <div id="daftarKursus" class="tabcontent">

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Anjuran</span>
                                </div>
                                <div class="right">
                                    <span>: Pejabat Agama Islam Bentong</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Lokasi</span>
                                </div>
                                <div class="right">
                                    <span>: Masjid Ar-Redha</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Nama Pemohon </span>
                                </div>
                                <div class="right">
                                    <span>: Ali Bin Abu</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Tarikh Kursus </span>
                                </div>
                                <div class="right">
                                    <span>: 12/4/2023</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Masa Kursus </span>
                                </div>
                                <div class="right">
                                    <span>: 8:00 - 4:00p.m</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Pegawai Dihubungi </span>
                                </div>
                                <div class="right">
                                    <span>: Encik Ahmad</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>No. Tel</span>
                                </div>
                                <div class="right">
                                    <span>: 019-3002345</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Bukti Pembayaran </span>
                                </div>
                                <div class="right">
                                    <span>: receiptttt.jpeg</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('manageMCourse.index') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
