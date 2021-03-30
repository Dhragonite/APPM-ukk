@section('style')
<meta content="" name="description">
<meta content="" name="keywords">

  <!-- Favicons -->
<link href="{{ asset('maundy') }}/assets/img/favicon.png" rel="icon">
<link href="{{ asset('maundy') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{ asset('maundy') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('maundy') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
<link href="{{ asset('maundy') }}/assets/css/style.css" rel="stylesheet">

@endsection

@section('content')
  <main id="main">

  <div class="container-fluid mt--7 " style="padding-top:100pt">
        <div class="row justify-content-md-center">
            <div class="col-xl-11 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <h3 class="mb-0">Laporan</h3>
                        </div>
                    </div>
                    <div class="card-body bg-dark">
                        <div class="default-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-none-tab" data-toggle="tab" href="#nav-none"
                                        role="tab" aria-controls="nav-none" aria-selected="true">Belum</a>
                                    <a class="nav-item nav-link" id="nav-proses-tab" data-toggle="tab" href="#nav-proses"
                                        role="tab" aria-controls="nav-proses" aria-selected="false">Proses</a>
                                    <a class="nav-item nav-link" id="nav-selesai-tab" data-toggle="tab" href="#nav-selesai"
                                        role="tab" aria-controls="nav-selesai" aria-selected="false">Selesai</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-4" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-none" role="tabpanel"aria-labelledby="nav-none-tab">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span></span>
                                        <div class="btn-group btn-group-md mb-3">
                                            <button onclick="refreshTable()" type="button"
                                            class="btn btn-outline-primary btn-sm" title="Refresh data"><i
                                            class="fa fa-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table style="width: 100% !important" id="tabel_none" class="table align-items-center text-white">
                                            <thead>
                                                <tr>
                                                    <th>Judul</th>
                                                    <th>Nama pengirim</th>
                                                    <th>tanggal laporan</th>
                                                    <th>status</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-proses" role="tabpanel"aria-labelledby="nav-proses-tab">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span></span>
                                        <div class="btn-group btn-group-md mb-3">
                                            <button onclick="refreshTable()" type="button"
                                            class="btn btn-outline-primary btn-sm" title="Refresh data"><i
                                            class="fa fa-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table style="width: 100% !important" id="tabel_proses" class="table align-items-center">
                                            <thead>
                                                <tr>
                                                    <th>Judul</th>
                                                    <th>Nama pengirim</th>
                                                    <th>tanggal laporan</th>
                                                    <th>status</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-selesai" role="tabpanel"aria-labelledby="nav-selesai-tab">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span></span>
                                        <div class="btn-group btn-group-md mb-3">
                                            <button onclick="refreshTable()" type="button"
                                            class="btn btn-outline-primary btn-sm" title="Refresh data"><i
                                            class="fa fa-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table style="width: 100% !important" id="tabel_selesai" class="table align-items-center">
                                            <thead>
                                                <tr>
                                                    <th>Judul</th>
                                                    <th>Nama pengirim</th>
                                                    <th>tanggal laporan</th>
                                                    <th>status</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.nav')
</div>

  </main><!-- End #main -->
@endsection

@section('script')
 <!-- Vendor JS Files -->
<script src="{{ asset('maundy') }}/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('maundy') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('maundy') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{ asset('maundy') }}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{ asset('maundy') }}/assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
<script src="{{ asset('maundy') }}/assets/js/main.js"></script>
@endsection


