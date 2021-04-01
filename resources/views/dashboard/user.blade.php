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
<!-- End #header -->

  <main id="main">
  <div id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">
      <h1>Aplikasi Pelaporan Pengaduan Masyarakat</h1>
    </div>
   </div>
    
      <div class="container">
          <form role="form" enctype="multipart/form-data" method="POST" data-toggle="validator" action="{{ route('pengaduan.store') }}" class="php-email-form">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        
                        @auth()
                            <input type="hidden" id="nik" name="nik" value="{{Auth::user()->nik}}">
                        @endauth

                            <div class="form-group{{ $errors->has('judul') ? ' has-danger' : '' }}">
                                <label class="form-label">Judul :</label>
                                <div class="input-group  mb-3">
                                    <input class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" placeholder="{{ __('Ketik judul laporan anda*') }}" type="text" name="judul" value="{{ old('judul') }}" required autofocus>
                                </div>
                                @if ($errors->has('judul'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('isi_laporan') ? ' has-danger' : '' }}">
                                <label class="form-label">Isi Laporan :</label>
                                <div class="input-group  mb-3">
                                    <textarea class="form-control{{ $errors->has('isi_laporan') ? ' is-invalid' : '' }}" style="resize:none" rows="5" placeholder="{{ __('Ketik isi laporan anda*') }}" type="text" name="isi_laporan" value="{{ old('isi_laporan') }}" required autofocus></textarea>
                                </div>
                                @if ($errors->has('isi_laporan'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('isi_laporan') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('lokasi') ? ' has-danger' : '' }}">
                                <label class="form-label">Lokasi :</label>
                                <div class="input-group  mb-3">
                                    <input class="form-control{{ $errors->has('lokasi') ? ' is-invalid' : '' }}" placeholder="{{ __('Ketik lokasi laporan anda*') }}" type="text" name="lokasi" value="{{ old('lokasi') }}" required autofocus>
                                </div>
                                @if ($errors->has('lokasi'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('lokasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <label class="form-label">Foto Bukti :</label>
                                    <input type="file" accept="image/*" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" placeholder="{{ __('Masukan foto bukti*') }}" name="foto" value="{{ old('foto') }}" required>
                                </div>
                                @if ($errors->has('foto'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="text-left">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" for="visible" name="visible" class="cb_role custom-control-input" id="visible1" value="anonim">
                                    <label class="custom-control-label" for="visible1">Laporkan sebagai anonim</label>
                                    <label class="h6 label text-muted ml-2" for="visible1"><span style="color:red;">*</span>Hanya bisa dilihat petugas</label>
                                </div>
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Laporkan') }}</button>
                            </div>
                        </form>
        </div>

      </div>

    @include('layouts.footers.nav')
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


