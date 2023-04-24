@extends('backend.shared.backend_theme')
@section('title', 'Kullanıcı Adres Modülü')
@section('subtitle', 'Yeni Adres Ekle')
@section('btn_url', url("/users/$user->user_id/addresses/create"))
@section('btn_label', 'Yeni Ekle')
@section('btn_icon', 'plus')
@section('content')
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Sıra no</th>
            <th scope="col">Sehir</th>
            <th scope="col">ilçe</th>
            <th scope="col">Posta Kodu</th>
            <th scope="col">Açık Adres</th>
            <th scope="col">Varsayılan</th>
            <th scope="col">İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @if (!empty($addrs) && (count($addrs) > 0))
            @foreach ($addrs as $addr)
                <tr id={{$addr->address_id}}>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$addr->city}}</td>
                    <td>{{$addr->district}}</td>
                    <td>{{$addr->zipcode}}</td>
                    <td>{{$addr->address}}</td>
                    <td>
                        @if($addr->is_default == 1)
                        <span class="badge bg-success">Evet</span>
                        @else
                        <span class="badge bg-danger">Hayır</span>
                        @endif
                    </td>

                    <td>
                    <ul class="nav float-start">
                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{url("/users/$user->user_id/addresses/$addr->address_id/edit")}}">
                                <span data-feather="edit"></span>
                                Güncelle
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-item-delete text-black" href="{{url("/users/$user->user_id/addresses/$addr->address_id")}}">
                                <span data-feather="trash"></span>
                                Sil
                            </a>
                        </li>
                    </ul>
                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">
                    <p class="text-center">herhangi bir adres bulunamadı</p>
                </td>
            </tr>
        @endif


    </tbody>
</table>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Yönetim paneli</title>

@endsection
