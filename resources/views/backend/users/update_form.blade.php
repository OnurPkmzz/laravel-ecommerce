
@extends('backend.shared.backend_theme')
@section('title', 'Kullanıcı modülü')
@section('subtitle', 'Kullanıcı güncelle')
@section('btn_url', url('/users'))
@section('btn_label', 'Geri dön')
@section('btn_icon', 'arrow-left')
@section('content')
            <form action="{{ url("/users/$user->user_id") }}" method="POST">
                        @csrf
                        @method("PUT")
                        <input type="hidden" name="user_id" value="{{$user->user_id}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name" class="form-label">Ad Soyad</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ad soyad giriniz" value="{{old("name",$user->name)}}">
                                    @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{old("email",$user->email)}}" placeholder="Mail adresi giriniz">
                                    @error("email")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="is_admin" value="1" {{$user->is_admin == 1 ? "checked" : ""}}
                                            name="is_admin" checked>
                                        <label class="form-check-label" for="is_admin">
                                            Yetkili Kullanıcı
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="is_active" value="1" {{$user->is_active == 1 ? "checked" : ""}}
                                            name="is_active" checked>
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
