@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Pendaftaran Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                @if (session()->has('success'))
                    <div id="alert">
                        @include('components.alert')
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h6>Maklumat Pasangan</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div class="table-responsive p-0">
                            <table id="myTable" class="table align-items-center mb-3 border">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Bil</th>
                                        <th>KP/Nama Suami</th>
                                        <th>No. Permohonan</th>
                                        <th>Kategori Nikah</th>
                                        <th>Tarikh Mohon</th>
                                        <th>Status</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                    <tr style="line-height: 30px;">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->applicant->app_ic ?? '-' }}<br>{{ $data->applicant->app_name ?? '-' }}</td>
                                        <td>{{ $data->mreg_noApp ?? '-' }}</td>
                                        <td>
                                            @if($data->mreg_category === "1") 
                                            Kahwin Kebenaran
                                            @else
                                            Kahwin Sukarela
                                            @endif
                                        </td>
                                        <td>{{$data->mreg_dateApply ?? '-' }}</td>
                                        <td><span class="badge badge-pill bg-info">Untuk Diluluskan</span></td>
                                        <td>
                                            <a href="{{ route('manageMRegistration.viewAppStaff') }}"><i class="fas fa-eye"
                                                    style="padding-right:15px;color:green"></i></a>
                                            <a href="{{ route('manageMRegistration.editMRegStaff') }}"><i class="fas fa-edit"
                                                    style="padding-right:15px;color:blue"></i></a>
                                            <a href="{{ route('manageMRegistration.printAppStaff') }}"><i class="fas fa-print"
                                                    style="padding-right:15px;color:rgba(0, 0, 0, 0.784)"></i></a>
                                            <a href="{{ route('manageMRegistration.editStatusStaff') }}"><i class="far fa-check-circle"
                                                    style="padding-right:15px;color:rgb(255, 122, 5)"></i></a>
                                            <a href="{{ route('manageMRegistration.viewCertificateStaff') }}"><i class="fas fa-certificate"
                                                    style="padding-right:15px;color:rgba(185, 185, 185, 0.297)"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
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