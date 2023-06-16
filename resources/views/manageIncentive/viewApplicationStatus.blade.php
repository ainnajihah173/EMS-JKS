@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Insentif Khas'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Permohonan</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <!-- Form Begins Here -->
                            <form role="form" method="POST" action="" enctype="multipart/form-data">
                                @csrf

                                <!-- Input Fields Here -->

                            </div>
                            <div class="text-center mt-5">
                                <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                                <!-- Submit Button Here -->
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
    </div>
@endsection
