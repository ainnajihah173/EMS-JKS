@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Aduan/Khidmat Nasihat</h4>
                    </div>

                    <div class="card-body">
                        <!-- Add the content you want to print here -->
                        <h1>Print Content Here</h1>
                        <!-- Example: -->
                        <h2>Maklumat Permohonan</h2>
                        <p>Tujuan Aduan: {{ $applicant['app_education'] }}</p>
                        <p>Nama: {{ $applicant['app_ic'] }}</p>
                        <!-- Add more content as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
