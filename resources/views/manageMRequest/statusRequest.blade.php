@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h6>Maklumat Permohonan</h6>
                        <a href="{{ route('manageMRequest.regRequestApplication') }}"
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
                                    <tr style="line-height: 30px;">
                                        <td>1</td>
                                        <td>981234050981</td>
                                        <td>Borang Permohonan</td>
                                        <td>22/11/2022</td>
                                        <td><span class="badge badge-pill bg-warning">Belum
                                                Hantar</span></td>
                                        <td>
                                            <a href="{{ route('manageMRequest.viewApplication') }}"><i class="fas fa-eye"
                                                    style="padding-right:15px;color:green"></i></a>
                                            <a href="{{ route('manageMRequest.editApplication') }}"><i class="fas fa-edit"
                                                    style="padding-right:15px;color:blue"></i></a>
                                            <a href=""><i class="fas fa-trash"
                                                    style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                                            <a href="{{ route('manageMRegistration.printAppApplicant') }}"><i
                                                    class="fas fa-print"
                                                    style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                                        </td>
                                    </tr>
                                    <tr style="line-height: 30px;">
                                        <td>2</td>
                                        <td>981234050981</td>
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
                                            <a href="{{ route('manageMRegistration.printAppApplicant') }}"><i
                                                    class="fas fa-print"
                                                    style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                                        </td>
                                    </tr>
                                    <tr style="line-height: 30px;">
                                        <td>3</td>
                                        <td>981234050981</td>
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
                                            <a href="{{ route('manageMRegistration.printAppApplicant') }}"><i
                                                    class="fas fa-print"
                                                    style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                                        </td>
                                    </tr>
                                    <tr style="display:none">
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script>
        let table = new DataTable('#myTable');

        function deleteRecord(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000080',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                preConfirm: (input) => {
                    return fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                _token: "{{ csrf_token() }}"
                            })
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'The user has been deleted.',
                        'success'
                    )
                    setTimeout(() => {
                        document.location.reload();
                    }, 2000);
                }
            })
        }
    </script>
@endpush
