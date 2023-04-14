
@extends('backend.shared.backend_theme')
@section('title', 'Kullanıcı modülü')
@section('subtitle', 'Şifre değiştir')
@section('btn_url', url('/users'))
@section('btn_label', 'Geri dön')
@section('btn_icon', 'arrow-left')
@section('content')
                    <form action="{{ url("/users/$user->user_id/change-password")}}" method="POST">
                        @csrf
                        <div class="container">

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="Password" class="form-label">Şifre Giriniz</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Şifre giriniz">
                                        @error("password")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="password_confirmation" class="form-label">Şifre tekrarı</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                        placeholder="Şifrenizi tekrar giriniz" >
                                        @error("password")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-secondary">Kaydet</button>
                                </div>
                            </div>
                    </form>
@endsection
