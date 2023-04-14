@extends('backend.shared.backend_theme')
@section('title', 'kullanıcılar')
@section('subtitle', 'Yeni kullanıcı ekle')
@section('add_new_url', url('/users'))
@section('load-backButton', 'Geri dön')
@section('content')
    <form action="{{ url('/users') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <label for="name" class="form-label">Ad Soyad</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Ad soyad giriniz">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Mail adresi giriniz">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="Password" class="form-label">Şifre Giriniz</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Şifre giriniz">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="password_confirmation" class="form-label">Şifre tekrarı</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Şifrenizi tekrar giriniz">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" id="is_admin" value="1" name="is_admin"
                            checked>
                        <label class="form-check-label" for="is_admin">
                            Yetkili Kullanıcı
                        </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" id="is_active" value="1" name="is_active"
                            checked>
                        <label class="form-check-label" for="is_active">
                            Aktif Kullanıcı
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-secondary">Kaydet</button>
                </div>
            </div>
    </form>
@endsection
