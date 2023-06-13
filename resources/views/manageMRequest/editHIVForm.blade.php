@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header">

                        <div class="col-md-12 mt-4">
                            <div id="defaultOpen">
                                <table>
                                    <tr>
                                        <th>Kemaskini HIV Status (Telah Disahkan)</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="container mt-2">
                                                <div class="left">
                                                    <span>Nama Pemohon</span>
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
                                                    <span>Alamat</span>
                                                </div>
                                                <div class="right">
                                                    <span>ssssssssssssss</span>
                                                </div>
                                            </div>
                                            <div class="container mt-2">
                                                <div class="left">
                                                    <span>No. Tel</span>
                                                </div>
                                                <div class="right">
                                                    <span>ssssssssssssss</span>
                                                </div>
                                            </div>
                                            <div class="container mt-2">
                                                <div class="left">
                                                    <span>Keputusan *</span>
                                                </div>
                                                <div class="right">
                                                    <select class="form-select" aria-label="Default select example" style="width:50%;">
                                                        <option selected></option>
                                                        <option value="1">Positif</option>
                                                        <option value="2">Negatif</option>
                                                    </select>
                                                </div>
                                            </div>
                        
                                            <div class="container mt-2">
                                                <div class="left">
                                                    <span>Dokumen HIV Pemohon *</span>
                                                </div>
                                                <div class="right">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="file" id="receipt" name="receipt">
                                                        </div>
                                                    </div>
                                             </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <a href="{{ route('manageMRequest.statusRequest') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                                    Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection