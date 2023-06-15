@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Insentif Khas'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h6>Maklumat Pemohon</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Nav Tab -->
                        <form role="form" method="POST" action="{{ route('applyIncentive:create') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="nav-wrapper position-relative end-0">
                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-2 py-1 active" href="#pemohon" role="tab"
                                            aria-selected="true">
                                            <span class="fw-bold">Maklumat Pemohon</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-2 py-1" href="#pasangan" role="tab"
                                            aria-selected="false">
                                            <span class="fw-bold">Maklumat Pasangan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-2 py-1" href="#waris" role="tab"
                                            aria-selected="false">
                                            <span class="fw-bold">Maklumat Waris</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-2 py-1" href="#dokumen" role="tab"
                                            aria-selected="false">
                                            <span class="fw-bold">Dokumen</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="pemohon" role="tabpanel">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_pemohon" class="form-control-label">Nama Pemohon <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="nama_pemohon" type="text" name="applicant[app_name]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_kad_pengenalan" class="form-control-label">No. Kad Pengenalan <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="no_kad_pengenalan" name="applicant[app_ic]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tarikh_lahir" class="form-control-label">Tarikh Lahir <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="tarikh_lahir" name="applicant[tarikh_lahir]" type="date">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-range" viewBox="0 0 16 16">
                                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM9 8a1 1 0 0 1 1-1h5v2h-5a1 1 0 0 1-1-1zm-8 2h4a1 1 0 1 1 0 2H1v-2z"/>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="umur" class="form-control-label">Umur <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="umur" name="applicant[umur]" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tempat_lahir" class="form-control-label">Tempat Lahir <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="tempat_lahir" name="applicant[tempat_lahir]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="warganegara" class="form-control-label">Warganegara <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="warganegara" name="applicant[warganegara]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_passport" class="form-control-label">No. Passport/Tentera/Polis <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="no_passport" name="applicant[no_passport]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_telefon" class="form-control-label">No. Telefon <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="no_telefon" name="applicant[no_telefon]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_bank" class="form-control-label">Nama Bank <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="nama_bank" name="applicant[nama_bank]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_akaun_bank" class="form-control-label">No. Akaun Bank <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="no_akaun_bank" name="applicant[no_akaun_bank]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="alamat_semasa" class="form-control-label">Alamat Semasa <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="alamat_semasa" name="applicant[alamat_semasa]" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="" id="alamat_sama">
                                            <label class="form-check-label" for="alamat_sama">
                                                Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam K/P
                                            </label>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-3" id="nextBtn">Seterusnya</button>
                                    </div>
                                    <div class="tab-pane fade" id="pasangan" role="tabpanel">
                                        <!-- Maklumat Pasangan Form -->
                                    </div>
                                    <div class="tab-pane fade" id="waris" role="tabpanel">
                                        <!-- Maklumat Waris Form -->
                                    </div>
                                    <div class="tab-pane fade" id="dokumen" role="tabpanel">
                                        <!-- Dokumen Form -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
