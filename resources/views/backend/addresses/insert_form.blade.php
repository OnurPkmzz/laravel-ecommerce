@extends('backend.shared.backend_theme')
@section('title', 'kullanıcı Adres Modülü')
@section('subtitle', 'Yeni Adres Ekle')
@section('btn_url', url('/users'))
@section('btn_label', 'Geri dön')
@section('btn_icon', 'arrow-left')
@section('content')
    <form action="{{ url("/users/$user->user_id/addresses") }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{$user->user_id}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <label for="city" class="form-label">Şehir</label>
                    <input type="text" class="form-control" id="city" name="city"
                        value="{{ old('city') }}"
                        placeholder="Şehir giriniz">
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="district" class="form-label">ilçe</label>
                    <input type="text" class="form-control" id="district" name="district"
                        value="{{ old('district') }}"
                        placeholder="ilçe giriniz">
                    @error('district')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <label for="zipcode" class="form-label">Posta Kodu</label>
                    <input type="text" class="form-control" id="zipcode" name="zipcode"
                    placeholder="Posta Kodu">
                    @error('zipcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-6">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="is_default" value="1" name="is_default"
                                checked>
                            <label class="form-check-label" for="is_default">
                                Varsayılan
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <div class="mt-4">
                    <label for="address" class="form-label">Açık Adres</label>
                    <textarea name="address" id="address" class="form-control" cols="20" rows="5"></textarea>
                    @error('address')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
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
