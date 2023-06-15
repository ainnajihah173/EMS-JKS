@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h6>Maklumat Permohonan</h6>
                        <a href={{ route('manageMRequest.regRequestApplication') }}
                            class="btn btn-info btn-sm float-end mb-0 mt-4">Daftar Kebenaran</a>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div class="table-responsive p-0">
                            <table id="myTable" class="table align-items-center mb-3 border">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Bil</th>
                                        <th> No K/P</th>
                                        <th>Jenis Dokumen</th>
                                        <th>Tarikh Mohon</th>
                                        <th>Status</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr style="line-height: 30px;">
                                            <td>1</td>
                                            <td>{{ $data->applicant->app_ic ?? '-' }}
                                                <br>{{ $data->applicant->app_name ?? '-' }}
                                            </td>
                                            <td>Borang Permohonan</td>
                                            <td>22/11/2022</td>
                                            <td><span class="badge badge-pill bg-warning">Belum
                                                    Hantar</span></td>
                                            <td>
                                                <a href="{{ route('manageMRequest.viewApplication') }}"><i
                                                        class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                                                <a
                                                    href="{{ route('manageMRequest.editApplication', ['m_application' => $data['id']]) }}"><i
                                                        class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                                                <a href="#"
                                                    onclick="deleteRecord('{{ route('manageMRequest.destroy', ['m_application' => $data['id']]) }}')"><i
                                                        class="fas fa-trash"
                                                        style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                                                <a href="{{ route('manageMRequest.editWakalahForm') }}"><i
                                                        class="fas fa-print"
                                                        style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                                            </td>
                                        </tr>
                                        {{-- <tr style="line-height: 30px;">
                                        <td>2</td>
                                        <td>{{ $data->applicant->app_ic ?? '-' }}
                                            <br>{{ $data->applicant->app_name ?? '-' }}</td>
                                        <td>Borang HIV</td>
                                        <td>22/11/2022</td>
                                        <td><span class="badge badge-pill bg-warning">Belum
                                                Hantar</span></td>
                                        <td>
                                            <a href="{{ route('manageMRequest.viewApplication') }}"><i class="fas fa-eye"
                                                    style="padding-right:15px;color:green"></i></a>
                                            <a href="{{ route('manageMRequest.editHIVForm') }}"><i class="fas fa-edit"
                                                    style="padding-right:15px;color:blue"></i></a>
                                            <a href=""><i class="fas fa-trash"
                                                    style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                                            <a href="{{ route('manageMRequest.editHIVForm') }}"><i
                                                    class="fas fa-print"
                                                    style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                                        </td>
                                    </tr>
                                    <tr style="line-height: 30px;">
                                        <td>3</td>
                                        <td>{{ $data->applicant->app_ic ?? '-' }}
                                            <br>{{ $data->applicant->app_name ?? '-' }}</td>
                                           
                                        <td>Borang Persetujuan Wali</td>
                                        <td>22/11/2022</td>
                                        <td><span class="badge badge-pill bg-warning">Belum
                                                Hantar</span></td>
                                        <td>
                                            <a href="{{ route('manageMRequest.viewApplication') }}"><i class="fas fa-eye"
                                                    style="padding-right:15px;color:green"></i></a>
                                            <a href="{{ route('manageMRequest.editWakalahForm') }}"><i class="fas fa-edit"
                                                    style="padding-right:15px;color:blue"></i></a>
                                            <a href=""><i class="fas fa-trash"
                                                    style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                                            <a href="{{ route('manageMRequest.editWakalahForm') }}"><i
                                                    class="fas fa-print"
                                                    style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                                        </td>
                                    </tr> --}}
                                        <tr style="display:none">
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- Padam Aduan Modal -->
                            <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
                                aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteConfirmationModalLabel">Padam Permohonan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Adakah kamu mahu memadam permohonan?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <a href="" id="deleteLink" class="btn btn-danger">Padam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End Padam Aduan Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
@push('js')
<script>
    let table = new DataTable('#myTable');

    function deleteRecord(deleteUrl) {
        // Set the href attribute of the delete link in the modal
        document.getElementById('deleteLink').href = deleteUrl;

        // Show the delete confirmation modal
        $('#deleteConfirmationModal').modal('show');
    }
</script>
@endpush
