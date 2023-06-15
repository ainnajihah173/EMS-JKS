@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="tab">
                            <button class="tablinks active" onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.postponeCourse' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.postponeCourse') }}"><button class="tablinks"
                                    onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.documentListTab' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.documentListTab') }}"><button class="tablinks"
                                    onclick="activity(event, 'cetak')">Cetak</button></a>
                        </div>

                        <form role="form" method="POST" action={{ route('regCourse.store') }} enctype="multipart/form-data">
                            @csrf 
                            <div id="daftarKursus" class="tabcontent">
                                <div class="instruction-note">
                                    <p><b><i>***Sila isi semua bahagian.( * )adalah mandatori***</i></b></p>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pilih Lokasi Anjuran
                                            *</label>
                                        <select class="form-select" name="course_id">
                                            <option selected disabled>Sila Pilih Daerah</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->cou_locDistrict }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pilih Lokasi *</label>
                                        <select class="form-select" name="course_id">
                                            <option selected disabled>Sila Pilih Lokasi</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}"> {{ $course->cou_address }}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="example-text-input">Tarikh Kursus *</label>
                                        <select class="form-select" name="course_id">
                                            <option selected disabled>Sila Pilih Tarikh</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->cou_date }}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-lbl">
                                    <label class="example-text-input">Masa Kursus: </label>
                                    {{-- <label for="time" class="lbl-spacing">{{ $row->cou_startTime }} - {{ $row->cou_endTime}}</label> --}}

                                        <label class="example-text-input">Pegawai Dihubungi: </label>
                                        <label for="dutyStaff" class="lbl-spacing">En Ahmadddddddddd</label>

                                        <label class="example-text-input">No. Tel: </label>
                                        <label for="staffPhoneNum" class="lbl-spacing">012-23456535</label>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="example-text-input">Bukti Pembayaran * </label>
                                        <input class="form-control" type="file" id="receipt" name="couApp_receipt">
                                    </div>
                                </div>


                                <div class="text-end mt-2">
                                    <button type="submit" class="btn btn-success btn-md ms-auto">Save</button>
                                </div>
                            </div>
                        </form>
                        <a href="{{ route('manageMCourse.index') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                    </div>

                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

{{-- @push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#loc').on('change', function() {
                var cou_id = this.value;
                $('#loc').html('');
                $.ajax({
                    url: '{{ route('address') }}?cou_id' + cou_id,
                    type: 'get',
                    success: function(res) {
                        $('#address').html('<option value="">Sila Pilih Lokasi</option>');
                        $.each(res, function(key, value) {
                            $('#address').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#date').html('<option value="">Sila Pilih Tarikh</option>');
                    }
                });
            });
            $('#address').on('change', function() {
                var cou_locDistrict = this.value;
                $('#date').html('');
                $.ajax({
                    url: '{{ route('date') }}?cou_locDistrict=' + cou_locDistrict,
                    type: 'get',
                    success: function(res) {
                        $('#date').html('<option value="">Sila Pilih Tarikh</option>');
                        $.each(res, function(key, value) {
                            $('#date').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endpush --}}
