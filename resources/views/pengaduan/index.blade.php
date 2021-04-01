@extends('layouts.app2', ['title' => __('User Profile')] , ['class' => 'bg-default'])

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
  <main id="main" class="">

  <div class="container-fluid" style="padding-top:100pt;" >
        <div class="row justify-content-md-center">
            <div class="col-xl-11 mb-5 mb-xl-0">
                <div class="card shadow bg-transparent">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <h3 class="mb-0 text-white" style="padding-left:50px">Laporan</h3>
                        </div>
                    </div>
                    <div class="card-body bg-light">
                    <div class="default-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active " id="nav-public-tab" data-toggle="tab" href="#nav-public"
                                        role="tab" aria-controls="nav-public" aria-selected="true">Public</a>
                                    <a class="nav-item nav-link" id="nav-private-tab" data-toggle="tab" href="#nav-private"
                                        role="tab" aria-controls="nav-private" aria-selected="false">Private</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-4" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-public" role="tabpanel"aria-labelledby="nav-public-tab">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span></span>
                                        <div class="btn-group btn-group-md mb-3">
                                            <button onclick="refreshTable()" type="button"
                                            class="btn btn-outline-primary btn-sm" title="Refresh data"><i
                                            class="fa fa-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table style="width: 100% !important" id="tabel_public" class="table align-items-center">
                                            <thead>
                                                <tr>
                                                    <th>Judul</th>
                                                    <th>tanggal laporan</th>
                                                    <th>status</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-private" role="tabpanel"aria-labelledby="nav-private-tab">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span></span>
                                        <div class="btn-group btn-group-md mb-3">
                                            <button onclick="refreshTable()" type="button"
                                            class="btn btn-outline-primary btn-sm" title="Refresh data"><i
                                            class="fa fa-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table style="width: 100% !important" id="tabel_private" class="table align-items-center">
                                            <thead>
                                                <tr>
                                                    <th>Judul</th>
                                                    <th>tanggal laporan</th>
                                                    <th>tipe</th>
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
<!-- DataTables -->
<script src="{{ asset('assets') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Sweet Alert jquery-->
<script src="{{asset('assets')}}/vendor/sweet-alert/sweetalert.min.js" ></script>
<!-- Select2 -->
<script src="{{asset('assets') }}/vendor/select2/select2.full.min.js"></script>
{{-- Validator --}}
<script src="{{ asset('assets') }}/vendor/validator/validator.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var table1 = $('#tabel_public').DataTable({
        "bLengthChange": false,
        "bFilter": true,
        processing: true,
        serverSide: true,
        responsive: true,
        "oLanguage": {
        "oPaginate": {
            "sPrevious": "<", 
            "sNext": ">", 
        }
        },
        ajax: "{{ route('laporan.datatables.public') }}",
        columns: [
            {data: 'judul', name: 'judul'},
            {data: 'tgl_pengaduan', name: 'tgl_pengaduan'},
            {data: 'status', name: 'status'},
            {data: 'periksa', name: 'periksa', orderable: false, searchable: false}
        ]
    });
    var table2 = $('#tabel_private').DataTable({
        "bLengthChange": false,
        "bFilter": true,
        processing: true,
        serverSide: true,
        responsive: true,
        "oLanguage": {
        "oPaginate": {
            "sPrevious": "<", 
            "sNext": ">", 
        }
        },
        ajax: "{{ route('laporan.datatables.private') }}",
        columns: [
            {data: 'judul', name: 'judul'},
            {data: 'tgl_pengaduan', name: 'tgl_pengaduan'},
            {data: 'visible', name: 'visible'},
            {data: 'status', name: 'status'},
            {data: 'periksa', name: 'periksa', orderable: false, searchable: false}
        ]
    });
});
        
    function refreshTable() {
        $('#tabel_private').DataTable().draw(true)
        $('#tabel_public').DataTable().draw(true)
    }
</script>
@endsection






