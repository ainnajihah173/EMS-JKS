@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Insentif Khas'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Pemohon</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Nav Tab -->
                        <form role="form" method="POST" action={{ route('applyIncentive:store') }}
                            enctype="multipart/form-data">
                            @csrf
                            <div class="nav-wrapper position-relative end-0">
                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#pemohon"
                                            role="tab" aria-controls="pemohon" aria-selected="true">
                                            Maklumat Pemohon
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#pasangan"
                                            role="tab" aria-controls="pasangan" aria-selected="false">
                                            Maklumat Pasangan
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#waris"
                                            role="tab" aria-controls="waris" aria-selected="false">
                                            Maklumat Waris
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dokumen"
                                            role="tab" aria-controls="dokumen" aria-selected="false">
                                            Dokumen
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-header pb-0 text-center">
                                    <p class="fw-bold font-italic">** Sila Pastikan Maklumat Diisi dengan Maklumat Yang
                                        Betul **
                                    </p>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <!-- Maklumat Pemohon Tab Pane -->
                                    <div class="tab-pane fade show active" id="pemohon" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <!-- Replace this section with your content -->
                                        <div class="text-center mt-4">
                                            <a href="" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                        </div>
                                    </div>
                                    <!-- Maklumat Pasangan Tab Pane -->
                                    <div class="tab-pane fade" id="pasangan" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <!-- Replace this section with your content -->
                                        <div class="text-center mt-4">
                                            <a href="" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                        </div>
                                    </div>
                                    <!-- Maklumat Waris Tab Pane -->
                                    <div class="tab-pane fade" id="waris" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <!-- Replace this section with your content -->
                                        <div class="text-center mt-4">
                                            <a href="" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                        </div>
                                    </div>
                                    <!-- Dokumen Tab Pane -->
                                    <div class="tab-pane fade" id="dokumen" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <!-- Replace this section with your content -->
<!-- Dokumen Sokongan field -->
<p>Dokumen Sokongan <span style="color: red;">*</span></p>
<p>Sila muatnaik salinan kad pengenalan, catatan akad nikah & penyata akaun bank</p>

<!-- Drag & drop file upload section -->
<form>
  <fieldset class="upload_dropZone text-center mb-3 p-4">
    <legend class="visually-hidden">Image uploader</legend>
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
      <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
      <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
    </svg>
    <p>Letakkan fail untuk <strong>muat naik</strong></p>
    <p style="font-size: smaller; opacity: 0.7;">atau klik di sini</p>
    <input id="upload_image_background" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />
    <label class="btn btn-upload mb-3" for="upload_image_background">Choose file(s)</label>
    <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>
  </fieldset>

  <!-- "+ Tambah Fail" button -->
  <button type="button" class="btn btn-primary">+ Tambah Fail</button>
</form>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-info btn-md ms-4">Hantar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
