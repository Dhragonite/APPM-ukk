@extends('layouts.app1')

@section('style')
<link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('urbanuiRegister') }}/assets/css/login.css">
@endsection

@section('content')
    
    <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Buat Akun</h1>
            <form role="form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama Lengkap" required autofocus>
            </div>
            @if ($errors->has('nama'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('nama') }}</strong>
                  </span>
            @endif
            <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
              <label for="nama">NIK</label>
              <input type="text" name="nik" id="nik" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" placeholder="Max 16 Angka" required autofocus>
            </div>
            @if ($errors->has('nik'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('nik') }}</strong>
                  </span>
            @endif
            <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
              <label for="nama">No Telepon</label>
              <input type="text" name="telp" id="telp" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" placeholder="ex:081********" required autofocus>
            </div>
            @if ($errors->has('telp'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('telp') }}</strong>
                  </span>
            @endif
            <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
              <label for="nama">Email</label>
              <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="contoh@ex.com" required>
            </div>
            @if ($errors->has('email'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
            @endif
            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
            </div>
            @if ($errors->has('password'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
            @endif
            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
              <label for="password_confirmation">Password Confirmation</label>
              <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="Konfirmasi Password" required>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Kirim">
            </form>
            <p class="login-wrapper-footer-text">Sudah Punya Akun? <a href="{{ route('login') }}" class="text-reset">Login di sini!</a> </p>
            <a href="/" class="text-reset">Kembali</a>  
           </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{ asset('urbanuiRegister') }}/assets/images/login.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endsection
