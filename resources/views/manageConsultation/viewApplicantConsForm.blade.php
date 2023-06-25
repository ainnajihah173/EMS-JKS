@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Aduan/Khidmat Nasihat'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Aduan/Khidmat Nasihat</h4>
                    </div>

                    <div class="card-body">
                        <div class="card-header pb-0 text-center">
                            <p class="fw-bold font-italic">Maklumat Permohonan</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Tujuan Aduan <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $applicant['app_education'] }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <h3>Maklumat Pengadu</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Nama <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $applicant['app_ic'] }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        No.KP/Passport <span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" value="{{ $applicant['app_ic'] }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Tarikh Lahir <span class="text-danger">*</span></label>
                                    <input class="form-control" type="date"
                                        value="{{ $applicant['app_birthdate'] }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Bangsa <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $applicant['app_nation'] }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Alamat Dalam K/P <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="3"
                                        readonly>{{ $applicant['app_houseaddress'] }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Alamat Terkini <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="3"
                                        readonly>{{ $applicant['app_addressLatest'] }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        No. Telefon <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text"
                                        value="{{ $applicant['app_phoneNumber'] }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Sektor Pekerjaan <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $applicant['app_jobSector'] }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Jawatan <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $applicant['app_jobName'] }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Pendapatan (RM) <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text"
                                        value="{{ $applicant['app_jobSalary'] }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Taraf Pendidikan <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $spouse['app_education'] }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <h3>Maklumat Pasangan</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Nama <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $applicant['spouse_name'] }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        No. Kad Pengenalan <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $spouse['spouce_ic'] }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <h3>Maklumat Aduan</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">
                                        Keterangan Aduan <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="3"
                                        readonly>{{ $applicant['consult_details'] }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            
                            <a href="{{ route('printConsForm') }}" class="btn btn-info btn-md ms-4">Cetak Permohonan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
