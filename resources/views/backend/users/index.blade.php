@extends('backend.shared.backend_theme')
@section('title', 'Kullanıcı Modülü')
@section('subtitle', 'kullanıcılar')
@section('btn_url', url('/users/create'))
@section('btn_label', 'Yeni Ekle')
@section('btn_icon', 'plus')
@section('content')
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Sıra no</th>
            <th scope="col">Ad soyad</th>
            <th scope="col">E-posta</th>
            <th scope="col">Durum</th>
            <th scope="col">İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @if (count($users) > 0)
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->is_active == 1)
                        <span class="badge bg-success">Aktif</span>
                        @else
                        <span class="badge bg-danger">Pasif</span>
                        @endif
                    </td>

                    <td>
                    <ul class="nav float-start">
                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{url("/users/$user->user_id/edit")}}">
                                <span data-feather="edit"></span>
                                Güncelle
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-item-delete text-black" href="{{url("/users/$user->user_id")}}">
                                <span data-feather="trash"></span>
                                Sil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{url("/users/$user->user_id/change-password")}}">
                                <span data-feather="lock"></span>
                                Şifre değiştir
                            </a>
                        </li>  <li class="nav-item">
                            <a class="nav-link text-black" href="{{url("/users/$user->user_id/addresses")}}">
                                <span data-feather="map-pin"></span>
                                Adreslerim
                            </a>
                        </li>
                    </ul>
                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">
                    <p class="text-center">herhangi bir kullanıcı bulunamadı</p>
                </td>
            </tr>
        @endif


    </tbody>
</table>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Yönetim paneli</title>

@endsection
